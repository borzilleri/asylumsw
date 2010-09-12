<?php defined('SYS_ROOT') OR die('Direct script access prohibited');

class main extends Controller_Core {
	protected $pageTitle = 'Jonathan Borzilleri';
	protected $pageHeader = 'Jonathan Borzilleri';
	
	public function index() {
		$view = new View('main/index');		
		$view->render(true);
	}	
}

?>
