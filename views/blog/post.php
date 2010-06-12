<?php defined('SYS_ROOT') OR die('Direct script access prohibited');
$header = new View('header');
$header->pageType = 'BlogPost';

$footer = new View('footer');
$header->render(true);

$singlePost = new View('blog/single');
$singlePost->post = $post;
?>

<div id="BlogBanner">
	<h2><a href="<?=sliMVC::config('core.site_uri');?>/blog">Ravings of a Madman</a></h2>
	<span>by <a href="<?=sliMVC::config('core.site_uri');?>">Jonathan Borzilleri</a></span>
</div>

<?=$singlePost->render();?>

<?=$footer->render();?>
