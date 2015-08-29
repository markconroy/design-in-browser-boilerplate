<?php
/**
 * We define the content that is going to go in the content region here.
 * We can use HTML, but make sure we only use single quotes to wrap this
 * variable in, so we don't get an unexpected string error because of a
 * double quoation mark ending a class or ID.
 *
 * This $mainContent variable is then called in the template file and will
 * then render what is placed in it.
 */
$mainContent = '
<h2>Page Title</h2>
<p>We are a leading developer of design in the browser solutions, consectetur adipiscing elit. Mauris ultrices hendrerit mauris. In gravida nisl erat, vel pellentesque erat molestie ac. Donec convallis neque neque, a efficitur nunc tempus sed. Cras a posuere purus. Suspendisse et bibendum dui. Fusce varius a quam in vulputate. Nullam eget nisi sed neque feugiat pretium. Fusce porttitor leo feugiat lacinia cursus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc varius accumsan urna eu tristique. Nulla et bibendum mi. Nunc non sollicitudin sem, ac pharetra metus. Curabitur vel ligula volutpat, vehicula mi nec, blandit metus.This is a news teaser, consectetur adipiscing elit. Mauris ultrices hendrerit mauris. In gravida nisl erat, vel pellentesque erat molestie ac. Donec convallis neque neque, a efficitur nunc tempus sed. Cras a posuere purus. Suspendisse et bibendum dui. Fusce varius a quam in vulputate. Nullam eget nisi sed neque feugiat pretium. Fusce porttitor leo feugiat lacinia cursus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc varius accumsan urna eu tristique. Nulla et bibendum mi. Nunc non sollicitudin sem, ac pharetra metus. Curabitur vel ligula volutpat, vehicula mi nec, blandit metus.</p>
<p>We organise your design so that it can easily be transferred to Drupal, consectetur adipiscing elit. Mauris ultrices hendrerit mauris. In gravida nisl erat, vel pellentesque erat molestie ac. Donec convallis neque neque, a efficitur nunc tempus sed. Cras a posuere purus. Suspendisse et bibendum dui. Fusce varius a quam in vulputate. Nullam eget nisi sed neque feugiat pretium. Fusce porttitor leo feugiat lacinia cursus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc varius accumsan urna eu tristique. Nulla et bibendum mi. Nunc non sollicitudin sem, ac pharetra metus. Curabitur vel ligula volutpat, vehicula mi nec, blandit metus.This is a news teaser, consectetur adipiscing elit. Mauris ultrices hendrerit mauris. In gravida nisl erat, vel pellentesque erat molestie ac. Donec convallis neque neque, a efficitur nunc tempus sed. Cras a posuere purus. Suspendisse et bibendum dui. Fusce varius a quam in vulputate. Nullam eget nisi sed neque feugiat pretium. Fusce porttitor leo feugiat lacinia cursus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc varius accumsan urna eu tristique. Nulla et bibendum mi. Nunc non sollicitudin sem, ac pharetra metus. Curabitur vel ligula volutpat, vehicula mi nec, blandit metus.</p>
';
?>

<section>
  <div id="main" class="outer-container">
    <div class="inner-container">
      <?php
      /**
      * We define the relative path to the template we want to use here
      * At the moment there are four templates we can use:
      * 1) left-main-right.php - left sidebar, main content, and right sidebar
      * 2) left-main.php - left sidebar and main content
      * 3) main-right.php - main content and right sidebar
      * 4) main.php - main content area only
      */
      ?>
      <?php include('../includes/layouts/main/main-right.php'); ?>
    </div>
  </div>
</section>
