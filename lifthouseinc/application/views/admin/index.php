<div class="accordion">
	<h3>Content Management</h3>
	<div class="tabs">
		<ul>
			<? foreach($content as $i => $v){ ?>
				<li>
					<a href="#cms-tab-<?= str_replace(' ', '_', $v['name']) ?>">
						<?= ucwords($v['name']) ?>
					</a>
				</li>
			<? } ?>
		</ul>
		<? foreach($content as $i => $v){ ?>
			<div id="cms-tab-<?= str_replace(' ', '_', $v['name']) ?>">
				<form method="post">
					<input name="name" value="<?= $v['name'] ?>" type="hidden"/>
					<textarea name="content"><?= $v['content'] ?></textarea>
					<input class="full" type="submit" name="action" value="Save Content"/>
				</form>
			</div>
		<? } ?>
	</div>

	<h3>Website Configuration</h3>
	<div>
		<form method="post">
			<? foreach($configuration as $i => $v){ ?>
				<b><?= ucfirst($v['label']) ?></b>
				<input class="full" name="<?= $v['name'] ?>" value="<?= $v['value'] ?>" placeholder="<?= $v['example'] ?>" type="text"/>
				<hr/>
			<? } ?>
			<input class="full" type="submit" name="action" value="Save Configuration"/>
		</form>
	</div>

	<h3>Blog Management</h3>
	<div>
		<iframe class="clear" src="/admin/blog">
		</iframe>
	</div>
</div>
<div class="spacer20"></div>