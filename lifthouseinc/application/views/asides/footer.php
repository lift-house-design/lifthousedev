<div class="spacer120"></div>
<div id="footer" class="pad20">
	<div class="w33pc">
		<i><b>Quick Links</b></i>
		<br/>
		<a href="/" title="Austin Web Development">
			Home
		</a>
		<br/>
		<a href="/about" title="About <?= $site_name ?>">
			About Us
		</a>
		<br/>
		<? if($_SERVER['REQUEST_URI'] === '/'){ ?>
			<a href="http://lifthousedesign.com" title="Austin Web Development">
				Web Design
			</a>
		<? }else{ ?>
			<a href="/blog" title="Web Development Blog">
				Blog
			</a>
		<? } ?>
	</div>
	<div class="w33pc align-center">
		<i><b>I am interested in...</b></i>
		<br/>
		<a href="#">
			Blog 1
		</a>
		<br/>
		<a href="/blog/view/2">
			Blog 2
		</a>
		<br/>
		<a href="#">
			Blog 3
		</a>
	</div>
	<div class="w33pc align-right">
		<i><b>Additional Info</b></i><br/>
		<a href="/terms">Terms</a><br/>
		<a href="/privacy">Privacy</a><br/>
		<? if($logged_in){ ?>
			<a href="/authentication/log_out">Logout</a><br/>
		<? }else{ ?>
			<a href="/authentication/log_in">Login</a><br/>
		<? } ?>
	</div>
</div>