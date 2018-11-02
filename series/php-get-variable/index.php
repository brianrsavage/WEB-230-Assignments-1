 <?php
      // 01. Explain what the following if statement is doing.
      // The if statement is first checking to see if all fields are filled in. If not, text will be echoed to remind the user to fill in the information. If all fields are set, text will be echoed to display the current day, date and year.

      if ( isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']) ) {
        $day = $_GET['day'];
        $date = $_GET['date'];
        $year = $_GET['year'];
        if ( !empty($day) && !empty($date) && !empty($year)) {
          echo 'It is '.$day.' '.$date.' '.$year;
        }else{
          echo 'Fill in all fields';
        }
      }
    ?>

    <form action="index.php" method="GET">
      Day:<br/><input type="text" name="day" value=""><br>
      Date:<br/><input type="text" name="date" value=""><br>
      Year:<br/><input type="text" name="year" value=""><br>
      <input type="submit" value="Submit">
    </form>