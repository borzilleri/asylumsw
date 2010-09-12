<?php defined('SYS_ROOT') OR die('Direct script access prohibited');
$header = new View('header');
$header->pageType = 'BlogPost';
$header->render(true);
?>

<article>
	<header>
		<h1><?=$post->title;?></h1>
		<time pubdate datetime="<?=$post->datetime;?>"><?=$post->date;?></time>
	</header>
	
	<?=$post->body;?>
</article>

<?$footer = new View('footer');$footer->render(true);?>