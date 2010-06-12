<h2 class="post_title">
	<a href="<?=sliMVC::config('core.site_uri');?>/blog/post/<?=$post->slug;?>"><?=$post->title;?></a>
</h2>
<div class="post_container">
	<div class="post_date"><?=$post->date;?></div>
	<div class="post_body"><?=$post->body;?></div>
</div>