<div>
	<div class="w960">
		<i><h1>CONTACT US TODAY</h1></i>
		<form id="contact-form" method="post">
			<div>
				<h2>Contact Information</h2>
				<input type="text" name="name" placeholder="Name (first and last)" value="<?= $name ?>"/>
				<input type="text" name="phone" placeholder="Mobile Phone" value="<?= $phone ?>"/>
				<input type="text" name="email" placeholder="Email" value="<?= $email ?>"/>
			</div>
			<div class="select-wrap">
				<?= form_select(array('Text','Email','Text and Email'), $contact_method, 'name="contact_method"', 'How should we contact you?'); ?>
				<span class="select-arrow">&#x25BE;</span>
			</div>
			<div>
				<textarea name="message" placeholder="How can we help you?" class="tall"><?= $message ?></textarea>
				<input type="submit" value="SEND MESSAGE"/>
			</div>
		</form>
	</div>
</div>