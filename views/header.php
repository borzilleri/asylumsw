<?php defined('SYS_ROOT') OR die('Direct script access prohibited');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />		
		<title><?=$this->pageTitle;?></title>
		<link rel="stylesheet" type="text/css"
			href="http://fonts.googleapis.com/css?family=Inconsolata" />
		<link rel="stylesheet" type="text/css"
			href="<?=sliMVC::config('core.site_uri');?>/css/default.css" />
		<script type="text/javascript">
if ( window.addEventListener ) {
	var state = 0, konami = [38,38,40,40,37,39,37,39,66,65];
	window.addEventListener("keydown", function(e) {
		if ( e.keyCode == konami[state] ) state++;
		else state = 0;
		if ( state == 10 ) {
			state = 0;
			var v = document.getElementById('fib').style.display;
			if( 'block' == v )
				document.getElementById('fib').style.display = 'none';
			else
				document.getElementById('fib').style.display = 'block';
		}
	}, true);
}
		</script>
	</head>
	<body id="<?=$pageType;?>">
		<header>
			<h1><?=$this->pageHeader;?></h1>
			<nav>
				<?$nav=new View(get_class(sliMVC::$controller).'/nav');$nav->render(true);?>
			</nav>
		</header>