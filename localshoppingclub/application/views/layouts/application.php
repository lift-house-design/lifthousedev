<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- Nerd Stuff -->
    <meta charset="utf-8">
    <meta name="Content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--meta name="viewport" content="width=device-width, initial-scale=1"/-->
    <? /* You'll probably want to change this. It is for mobile friendliness. Uncomment the above line if you are building a mobile friendly site. */ ?>
    <meta name="viewport" content="width=980"/>
	
	<!-- SEO Stuff -->
    <title><?= $meta['title'] ?></title>
    <meta name="description" content="<?= $meta['description'] ?>">
    <meta name="keywords" content="<?= $meta['keywords'] ?>"/>
	<meta name="copyright" content="<?= $copyright ?>"/>

	<!-- Social SEO Stuff -->
	<meta property="og:title" content="<?= $meta['title'] ?>"/>
	<meta property="og:description" content="<?= $meta['description'] ?>"/>
	<meta property="og:type" content="Article"/>
	<meta property="og:url" content="<?= $meta['url'] ?>"/>
	<meta property="og:image" content="<?= $meta['image'] ?>"/>
	<meta property="og:site_name" content="Slang.org: Internet Slang"/>
	<meta property="fb:admins" content=""/>
	<meta name="twitter:card" content="summary"/>
	<meta name="twitter:url" content="<?= $meta['url'] ?>"/>
	<meta name="twitter:title" content="<?= $meta['title'] ?>"/>
	<meta name="twitter:description" content="<?= $meta['description'] ?>"/>
	<meta name="twitter:image" content="<?= $meta['image'] ?>"/>
	<meta itemprop="name" content="<?= $meta['title'] ?>"/>
	<meta itemprop="description" content="<?= $meta['description'] ?>"/>
	<meta itemprop="image" content="<?= $meta['image'] ?>"/>

	<!-- assets -->
    <?= min_css($min_css) ?>
    <?= css($css) ?>
    <?= less_css($less_css) ?>
    <?= min_js($min_js) ?>
	<?= js($js) ?>
</head>
<body>
	<?= $yield_topbar ?>
	<div id="content-wrap">
		<?= $yield_notifications ?>
		<?= $yield ?>
	</div>
	<?= $yield_footer ?>
	<?= $yield_analytics ?>
	<?= $yield_seo ?>
	<? /* Should add seo aside from slang.org */ ?>
</body>
</html>