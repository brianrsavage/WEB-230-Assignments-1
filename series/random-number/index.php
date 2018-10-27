<?php
  // 01. Explaine what the if statment is doing here.
  // The if statement here checks to see if the 'roll dice' button has been pressed before it echoes out a random number.
  if(isset($_POST['roll'])){
  
  // 02. Explaine what the rand function is.
  // The rand() function simply generates a random number; in this case, a number between 1 and 6.
    $rand = rand(1, 6);
    echo 'You rolled a '.$rand;
  }
  
  // 03. Explain a way the $rand might be used in a web application.
  // The first thought that came to mind, is it can be used as a generator to pick winners for giveaways, contest, etc.
?>

  <form action="index.php" method="POST">
    <input type="submit" name="roll" value="Roll dice.">
  </form>