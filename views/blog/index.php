<?php defined('SYS_ROOT') OR die('Direct script access prohibited');
$header = new View('header');
$header->pageType = 'Blog';
$header->render(true);
?>

<nav>
	<ul>
	<? foreach($posts as $p): ?>
		<li>
			<a href="/blog/<?=$p->slug;?>">/<?=$p->title;?></a>
			<time datetime="<?=$p->datetime;?>"><?=$p->date;?></time>
		</li>
	<? endforeach; ?>
	</ul>
</nav>

<?$footer=new View('footer');$footer->render(true);?>
