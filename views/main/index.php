<?php defined('SYS_ROOT') OR die('Direct script access prohibited');
$header = new View('header');
$header->pageType = 'Home';
$header->render(true);
?>

<article>
	<?$about=new View('main/about');$about->render(true);?>
</article>

<nav>
	<ul>
		<li><a href="/blog">/logs</a></li>
		<li><a href="http://github.com/duaiwe">/projects.github</a></li>
		<!--<li><a href="/work">/Work</a></li>-->
	</ul>
</nav>

<?$footer=new View('footer');$footer->render(true);?>
