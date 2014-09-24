<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Zsu Official &mdash; Sound Cloud Player</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

<div id="fb-root"></div>
<div id="blogWrap">
  <h1><a target="_blank">ZSU Official &mdash; SoundCloud Player</a></h1>
  <div >
  	<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/27777225&amp;color=3B5998&amp;auto_play=true&amp;hide_related=true&amp;show_artwork=true"></iframe>
  </div>
</div>

<div class="poweredby"><p>Powered by <a target="_blank" href="http://zuslive.com">ZSUlive.com</p></div>
<script src='https://connect.facebook.net/en_US/all.js'></script>
<script type="text/javascript"> 
   window.fbAsyncInit = function() {
    
	FB.init({
     appId: '644360475639202',
     status: true,
     cookie: true,
     xfbml: true,
	 oauth: true
    });
	
	
	
	/*FB.login({
        response_type: 'code'
    });
	
	var mylogin = FB;
	
	console.log(mylogin);*/
	

    //this resizes the the i-frame
    //on an interval of 100ms
    FB.Canvas.setAutoResize(100);

   };
   
   
   (function() {
    var e = document.createElement('script');
    e.async = true;
    e.src = document.location.protocol +
     '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);  
   }());

 </script>
 
</body>
</html>
