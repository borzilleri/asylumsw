<ul>
	<li><a href="/" title="Home">/home/jborzilleri</a></li>
	<li><a href="/blog" title="Blog">/logs</a></li>
<? if( $this->blogItem ):?>
	<li><a href="/blog/<?=$this->blogItem;?>">/<?=$this->blogItem;?>.text</a></li>
<? endif; ?>
</ul>