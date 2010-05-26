<?php defined('SYS_ROOT') OR die('Direct script access prohibited');
$header = new View('header');
$header->pageType = 'Blog';

$footer = new View('footer');
$header->render(true);?>

<h2 class="post_title"><a href="<?=slimVC::config('core.site_uri');?>/blog/post/<?=$post->slug;?>"><?=$post->title;?></a></h2>
<div>
	<span class="post_date"><?=$post->date;?></span>
</div>

<div class="post_body">
	<?=$post->body;?>
</div>

<?=$footer->render();?>
