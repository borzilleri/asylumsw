<?php defined('SYS_ROOT') OR die('Direct script access prohibited');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />		
		<title>Asylum Software</title>
		<link rel="stylesheet" href="<?=sliMVC::config('core.site_uri');?>/css/default.css" type="text/css" charset="utf-8" />
	</head>
	<body id="<?=$pageType;?>">

	<h1><a href="<?=sliMVC::config('core.site_uri');?>">Asylum Software</a></h1>
	<ul id="MainNav">
		<li id="home-tab"><a href="/">Home</a></li>
		<li id="blog-tab"><a href="/blog">Blog</a></li>
		<li id="project-tab">Projects</li>
		<li id="quote-tab">Quotes</li>
		<li id="about-tab">About</li>
	</ul>

<hr />