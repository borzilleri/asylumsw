<?php defined('SYS_ROOT') OR die('Direct script access prohibited');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />		
		<title>Asylum Software</title>
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans+Std+Light' rel='stylesheet' type='text/css'>
		<link href=' http://fonts.googleapis.com/css?family=Nobile' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="<?=sliMVC::config('core.site_uri');?>/css/default.css" type="text/css" charset="utf-8" />
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