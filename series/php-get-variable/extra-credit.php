<!-- Add some functionality that will set the value of the form fields. -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="fluid-container">
  <div class="row justify-content-center">
    <div class="col-6" style="padding:25px;">
      <h1>PHP $_GET Variable</h1>
    </div>
  </div>
    <?php
      // 01. Explain why we need to set these variables here at the begining of the script.
      // These variables need to be set so they can be filled in with the information recieved with the get function.

      $day = '';
      $date = '';
      $year = '';
      if ( isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']) ) {
        $day = $_GET['day'];
        $date = $_GET['date'];
        $year = $_GET['year'];
        // 02. Explain how the $msg variable is being used.
        // The msg variable is being set to act as an echo statement; to display what text is put into it.
        $msg = '';
        // 03. Explain how the $msgType variable is being used.
        // The msgType is being used to display the $msg in a certain way depending if all fields were filled in (green) or not (red).
        $msgType = 'success';
        if ( !empty($day) && !empty($date) && !empty($year)) {
          $msg = 'It is '. $day .' '. $date .' '. $year;
        }else{
          $msg = 'Fill in all fields.';
          $msgType = 'danger';
        }
        echo '<div class="row justify-content-center"><div class="col-6"><div class="alert alert-'.$msgType.'" role="alert"><h5>'.$msg.'</h5></div></div></div>';
      }

      // 04. Explain how we set the value in the form fields.
      // The value is set to echo out the information we get from the respective input field.
    ?>

    <div class="row justify-content-center">
      <div class="col-6">
        <!-- 05. Explain what will happen considering there is no action attribute set in the form element. 
	The data will be sent to self- the URL of the page containing the form-->
        <form method="GET">
          <div class="form-group">
            <label for="day">Day:</label>
            <input type="text" name="day" class="form-control" placeholder="Enter day here." value="<?php echo $day; ?>">
          </div>
          <div class="form-group">
            <label for="day">Date:</label>
            <input type="text" name="date" class="form-control" placeholder="Enter date here." value="<?php echo $date; ?>">
          </div>
          <div class="form-group">
            <label for="day">Year:</label>
            <input type="number" name="year" class="form-control" placeholder="Enter year here." value="<?php echo $year; ?>">
          </div>
          <div>
            <input type="submit" class="btn" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </div>
