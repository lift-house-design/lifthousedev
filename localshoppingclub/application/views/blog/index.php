<? foreach($blogs as $b){ ?>
	<div class="blog-wrap">
		<a href="/blog/view/<?= $b['id'] ?>"><h1 class="blog-title"><?= $b['name'] ?></h1></a>
		<b class="blog-author"><?= $b['first_name'] ?> <?= $b['last_name'] ?></b>
		&mdash;
		<i class="blog-time"/><?= $b['time'] ?></i>
		<div class="blog-content"><?= $b['content'] ?></div>
	</div>
	<div class="spacer10"></div>
<? } ?>
<? if(isset($older)){ ?>
	<a href="/blog/<?= intval($older) ?>">&larr; Older</a>
<? } ?>
<? if(isset($newer)){ ?>
	<a class="pull-right" href="/blog/<?= intval($newer) ?>">Newer &rarr;</a>
<? } ?>