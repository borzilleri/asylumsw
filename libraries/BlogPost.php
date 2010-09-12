<?php

/**
 * Description of BlogPost
 *
 * @author jborzilleri
 */
class BlogPost {
	protected $title;
	protected $timestamp;
	protected $body;
	
	protected $rawText;
	protected $slug;

	public function __construct($slug = null) {
		if( !is_null($slug) ) {
			$this->slug = $slug;
			$this->loadPost($this->slug);
		}
	}

	public function __get($val) {
		switch($val) {
			case 'datetime':
				return date(sliMVC::config('blog.datetime_format'), (false===$this->timestamp?time():$this->timestamp));
			case 'date':
				return date(sliMVC::config('blog.date_format'), (false===$this->timestamp?time():$this->timestamp));
			case 'title':
			case 'body':
			case 'slug':
				return $this->$val;
				break;
			default;
				return null;
				break;
		}
	}

	protected function generateFilePath() {
		return sprintf('%s/%s/%s.text', APP_ROOT, sliMVC::config('blog.posts_path'), $this->slug);
	}

	protected function loadPost($slug, $parseFile = true) {
		$path = $this->generateFilePath();
		if( !file_exists($path) ) {
			return false;
		}
		$this->rawText = file_get_contents($path);
		
		if( $parseFile ) {
			$this->title = $this->parseTitle();
			$this->body = $this->parseBody();
			$this->timestamp = $this->parseDate();
		}
	}

	public function parseBody() {
		if( empty($this->rawText) ) return '';

		$parser = new Markdown_Parser();
		return $parser->transform($this->rawText);
	}
	
	public function parseTitle() {
		if( empty($this->rawText) ) return '';
		
		$title = '';
		if( preg_match('/<!--\s*title:\s*"(.*)"\s*-->/', $this->rawText, $matches) ) {
			$title = $matches[1];
		}
		return $title;
	}

	public function parseDate() {
		$path = $this->generateFilePath();
		$timestamp = false;
		
		// First, check the post itself for a date tag.
		if( !empty($this->rawText) && preg_match('/<!--\s*date:\s*"(.*)"\s*-->/', 
						$this->rawText, $matches) ) {
			$date = strtotime($matches[1]);
			if( false !== $date ) {
				$timestamp = $date;
			}
		}
		
		// Next, attempt to stat the file for it's ctime
		if( false === $timestamp && file_exists($path) ) {
			$date = filectime($path);
			if( false !== $date ) {
				$timestamp = $date;
			}
		}

		
		return $timestamp;
	}
}
?>