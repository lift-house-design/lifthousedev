<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- Update your html tag to include the itemscope and itemtype attributes. -->
<html itemscope itemtype="http://schema.org/MusicGroup">

        <!-- Place this data between the <head> tags of your website -->
        <title>ZSU</title>
        <meta name="description" content="Page description. No longer than 155 characters." />
        
        <!-- Google Authorship and Publisher Markup -->
        <link rel="author" href="https://plus.google.com/[Google+_Profile]/posts"/>
        <link rel="publisher" href="https://plus.google.com/[Google+_Page_Profile]"/>
        
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="ZSU the band">
        <meta itemprop="description" content="This is the page description">
        <meta itemprop="image" content="http://zsulive.com/img/zsu-logo-fff-on-000-1024.png">
        
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="ZSU the band">
        <meta name="twitter:description" content="Page description less than 200 characters">
        <meta name="twitter:creator" content="@author_handle">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="http://zsulive.com/img/zsu-logo-fff-on-000-1024.png">
        
        <!-- Open Graph data -->
        <meta property="og:title" content="ZSU the band" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://www.zsulive.com/" />
        <meta property="og:image" content="http://zsulive.com/img/zsu-logo-fff-on-000-1024.png" />
        <meta property="og:description" content="Description Here" />
        <meta property="og:site_name" content="ZSU" />
        <meta property="article:published_time" content="<?php
		$filename = 'index.php';
		if (file_exists($filename)) {
			echo date("Y-m-d\TH:i:sP", filectime($filename));
		}
        ?>" />
        <meta property="article:modified_time" content="<?php
		$filename = 'index.php';
		if (file_exists($filename)) {
			echo date("Y-m-d\TH:i:sP", filemtime($filename));
		}
        ?>" />
        <meta property="article:section" content="Article Section" />
        <meta property="article:tag" content="Article Tag" />
        <meta property="fb:admins" content="578267158930476" />
        
        <!-- Open Graph data -->
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/zsu.css">

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <section class="container">
        	<img src="img/zsu-logo-fff-on-000-1024.png" alt="ZSU" />
            <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/27777225&amp;color=ee1f23&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
        </section>
        <footer class="container">
        	<p>Copyright &copy; <?php echo date("Y"); ?> ZSU. All Rights Reserved.</p>
        </footer>
        

        <script src="js/main.js"></script>
        <script src="js/zsu.js"></script>
    </body>
</html>
