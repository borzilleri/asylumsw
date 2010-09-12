<?php defined('SYS_ROOT') or die('Direct script access prohibited');

class blog extends Controller_Core {
	protected $pageTitle = 'Ravings of a Madman';
	protected $pageHeader = 'Ravings of a Madman';
	protected $blogItem = null;
	
	public function index() {
		$view = new View('blog/index');		
		/**
		 * TODO: Fix this to be list of all posts in posted order.
		 */
		$view->posts = array(new BlogPost($this->findLatestPost()));
		$view->render(true);
	}

	public function post($slug) {
		$view = new View('blog/post');
		$post = new BlogPost($slug);
		
		$this->pageTitle = $post->title .' &mdash; '.$this->pageTitle;
		$this->blogItem = $post->slug;
		
		$view->post = $post;
		$view->render(true);
	}
	
	protected function findLatestPost() {
		// Scan files looking for file with newest creation date
		// Return that file name, without the .text suffix.

		return 'first-post';
	}
}
?>
