<div id="topbar">
	<a href="/">
		<img src="/assets/img/logo.png" alt="<?= $meta['site_name'] ?>"/>
	</a>
	<? if($logged_in){ ?>
		<a href="/authentication/log_out" alt="<?= $meta['site_name'] ?> Log Out">Log Out</a>
		<a href="/admin/blog">Blog Management</a>
		<a href="/admin">Administration</a>
	<? }else{ ?>
		<a href="/authentication/log_in" alt="<?= $meta['site_name'] ?> Log In">Log In</a>
	<? } ?>
	<a href="/about" alt="About <?= $meta['site_name'] ?>">About</a>
</div>