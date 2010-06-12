<?php defined('SYS_ROOT') OR die('Direct script access prohibited');
$header = new View('header');
$header->pageType = 'Blog';

$footer = new View('footer');
$header->render(true);

$singlePost = new View('blog/single');
?>

<h1>Ravings of a Madman</h1>

<? foreach($posts as $post) {
	$singlePost->post = $post;
	$singlePost->render(true);
} ?>

<?=$footer->render();?>
