<h2>CMS</h2>
<? foreach($content as $i => $v){ ?>
	<b><?= ucwords($v['name']) ?> content</b>
	<form method="post">
		<input name="name" value="<?= $v['name'] ?>" type="hidden"/>
		<textarea name="content"><?= $v['content'] ?></textarea>
		<input class="full" type="submit" name="action" value="Save Content"/>
	</form>
	<hr/>
<? } ?>

<h2>Website Configuration</h2>
<form method="post">
	<? foreach($configuration as $i => $v){ ?>
		<b><?= ucfirst($v['label']) ?></b>
		<input class="full" name="<?= $v['name'] ?>" value="<?= $v['value'] ?>" placeholder="<?= $v['example'] ?>" type="text"/>
		<hr/>
	<? } ?>
	<input class="full" type="submit" name="action" value="Save Configuration"/>
</form>