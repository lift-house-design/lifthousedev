<div class="h100">
  <div class="auto">
    <div class="contact">
      <div class="center540">
        <h2 class="oleo c0">sign up</h2>
        <form id="contact-form" method="post">
          <input id="form-check" type="hidden" name="00<?= sha1(rand(0,time())) ?>" value=""/>

          <table border="0" cellpadding="5" cellspacing="0">
              <tr>
                <td class="align-right">Billing Address:</td>
                <td><input type="text" name="address" placeholder="Street Address" value="<?= $address; ?>"/></td>
              </tr>
              <tr>
                <td class="align-right">City:</td>
                <td><input type="text" name="city" placeholder="City" value="<?= $city; ?>"/></td>
              </tr>
              <tr>
                <td class="align-right">State:</td>
                <td><input type="text" name="state" placeholder="State" value="<?= $state; ?>"/></td>
              </tr>
              <tr>
                <td class="align-right">Zip Code:</td>
                <td><input type="text" name="zip" placeholder="Zip Code" value="<?= $zip; ?>"/></td>
              </tr>
              <tr>
                <td class="align-right">Company Phone:</td>
                <td><input type="text" name="phone" placeholder="Company Phone" value="<?= $phone; ?>"/></td>
              </tr>
              <tr>
                <td class="align-right">Mobile Phone:</td>
                <td><input type="text" name="mobile" placeholder="Mobile Phone" value="<?= $mobile; ?>"/></td>
              </tr>
          </table>
            <input type="submit" value="Procede to Step 3"/>
        </form>
      </div>
    </div>
  </div>
</div>
