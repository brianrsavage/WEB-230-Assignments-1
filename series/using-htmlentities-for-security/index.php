<?php
      if ( isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']) ) {
        // 01. Explain what htmlentities is doing.
        // htmlentities is used to display characters rather than processing them as HTML tags. In this case, it's echoing out the iframe, opening and closing tags included, as text, instead of trying to display an iframe. 
        $day = htmlentities($_GET['day']);
        $date = htmlentities($_GET['date']);
        $year = htmlentities($_GET['year']);

        if ( !empty($day) && !empty($date) && !empty($year)) {
          echo 'It is '.$day.' '.$date.' '.$year;
        }else{
          echo 'Fill in all fields';
        }
      }
    ?>

    <form action="index.php" method="GET">
      Day:<br/><input type="text" name="day"><br>
      Date:<br/><input type="text" name="date"><br>
      Year:<br/><input type="text" name="year"><br>
      <input type="submit" value="Submit">
    </form>