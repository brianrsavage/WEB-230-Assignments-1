<?php
  include 'config.inc.php';

  // 01. Explain the $_SERVER['SCRIPT_NAME'].
  // This information provides the current file name of the php script that the user is on.
  $script_name = $_SERVER['SCRIPT_NAME'];

  // 02. Explain what is happening to reduce the resulting output of the $images variable.
  // The pages will automatically update the directory so that each page will not have to be changed manually. If that is not the answer you're looking for, I genuinely do not understand the question.
  echo $images;
 ?>

  <!-- 03. Explaine how using the $script_name variable benefits us. -->
  <!-- This is used to change the content within the header.inc.php file to be dynamically updated depending on which page the user is on, rather than just the index page or all pages.. -->
  <form action="<?php echo $script_name; ?>" method="POST">
    <input type="submit" name="submit" value="Submit">
  </form>