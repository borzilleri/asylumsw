<?php defined('SYS_ROOT') OR die('Direct script access prohibited');
$header = new View('header');
$header->pageType = 'Home';

$footer = new VieW('footer');

$header->render(true);
?>

<h1><a href="<?=sliMVC::config('core.site_uri');?>/about">Jonathan Borzilleri</a></h1>
<h2>Asylum Software</h2>

<ul>
	<li>
		<h3>Opinions &amp; Philosophies</h3>
		<ul>
			<li><em>blog: <a href="/blog">Ravings of a Madman</a></em></li>
		<?php foreach($posts as $post): ?>
			<li><a href="/blog/post/<?=$post->slug;?>"><?=$post->title;?></a></li>
		<?php endforeach; ?>
		</ul>
	</li>
	<li>
		<h3>Software Development</h3>
		<ul>
			<li>Characterization &mdash; 4th Edition D&amp;D Character Manager</li>
			<li>MDWiki &mdash; <a href="http://daringfireball.net/projects/markdown/">Markdown</a> based wiki.</li>
			<li>sliMVC &mdash; Lightweight MVC Framework for PHP</li>
			<li>World Of Warcraft &mdash; Addons for the MMOG</li>
			<li><em>all projects: <a href="/projects">Asylum Software</a></em></li>
		</ul>
	</li>
	<li>
		<h3>Creative Outlets</h3>
		<ul>
			<li>Aeda &mdash; Fantasy Campaign Setting</li>
			<li>D&amp;D 3rd Edition Content</li>
			<li>Arcana Evolved Content</li>
		</ul>
	</li>
</ul>

<?=$footer->render();?>
