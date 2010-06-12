<?php defined('SYS_ROOT') or die('Direct script access prohibited');

class blog extends Controller_Core {
	protected $_view_title = 'The Blag';

	public function index() {
		$view = new View('blog/index');
		// Index method for blog.
		// Do what here?
		// - Most recent post?

		// Find & Retrieve most recent post.
		$post = new BlogPost($this->findLatestPost());
		
		$view->posts = array($post);
		$view->render(true);
	}

	public function post($slug) {
		$view = new View('blog/post');

		$post = new BlogPost($slug);
		
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
