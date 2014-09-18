<div class="h100">
  <div class="auto">
    <div class="contact">
      <div class="center540">
        <h2 class="oleo c0">sign up</h2>
        <form id="contact-form" method="post">
          <input id="form-check" type="hidden" name="00<?= sha1(rand(0,time())) ?>" value=""/>
          <table border="0" cellpadding="5" cellspacing="0">
              <tr>
                <td class="align-right">Company Name:</td>
                <td><input type="text" name="company" placeholder="Company Name" value="<?= $company; ?>"/></td>
              </tr>
              <tr>
                <td class="align-right">First &amp; Last Name:</td>
                <td><input type="text" name="name" placeholder="Your Name" value="<?= $name; ?>"/></td>
              </tr>
              <tr>
                <td class="align-right">Enter your email address:</td>
                <td><input type="text" name="email" placeholder="Email" value="<?= $email; ?>"/></td>
              </tr>
              <tr>
                <td class="align-right">Re-enter your email:</td>
                <td><input type="text" name="email2" placeholder="Re-enter Email" value="<?= $email2; ?>"/></td>
              </tr>
              <tr>
                <td class="align-right">Eight character password:</td>
                <td><input type="password" name="password" placeholder="Password" value="<?= $password; ?>"/></td>
              </tr>
              <tr>
                <td class="align-right">Re-enter your password:</td>
                <td><input type="password" name="password2" placeholder="Re-enter Password" value="<?= $password2; ?>"/></td>
              </tr>
          </table>
            <input type="submit" value="Procede to Step 2"/>
        </form>
      </div>
    </div>
  </div>
</div>
