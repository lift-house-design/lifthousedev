<div class="align-center">
	<h1>Log In</h1>
	<form method="post">
		<input name="email" value="<?= set_value('email') ?>" placeholder="Email"/>
		<br/>
		<input name="password" type="password" placeholder="Password"/>
		<br/>
		<input type="submit" value="Log In"/>
	</form>
	<a href="/authentication/forgot_password">Forgot Password?</a>
</div>