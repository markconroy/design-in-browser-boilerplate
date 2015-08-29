<?php
$mainContent = '
<h2>Contact Us</h2>
<form>
  <div class="form-item">
    <input type="text" placeholder="Your name:"></input>
  </div>
  <div class="form-item">
    <input type="email" placeholder="Your email address:"></input>
  </div>
  <div class="form-item">
    <input type="tel" placeholder="Your phone number:"></input>
  </div>
  <div class="form-item">
    <textarea rows="5" placeholder="Your message:"></textarea>
  </div>
  <div class="form-submit">
    <input type="submit" value="Submit">
  </div>
</form>
';
?>

<section>
  <div id="main" class="outer-container">
    <div class="inner-container">
      <?php include('../includes/layouts/main/main.php'); ?>
    </div>
  </div>
</section>
