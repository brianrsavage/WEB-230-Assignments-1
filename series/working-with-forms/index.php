<!--
  01. Explain what the action attribute is and does.
  The action attribute defines /where/ data is sent.
  02. Explain what the method attribute is and does.
  The method attribute defines /how/ data is sent.
-->

<form action="index.php" method="GET">
  Day:<br/><input type="text" name="day"><br>
  Date:<br/><input type="text" name="date"><br>
  Year:<br/><input type="text" name="year"><br><br>
  <input type="submit" value="Submit">
</form>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <div class="fluid-container">
    <div class="row justify-content-center">
      <div class="col-6">
        <form action="index.php" method="GET">
          <div class="form-group" style="padding: 20px 0px 10px; width: 300px;">
            <label for="day"><h6>Day:</h6></label>
            <input type="text" name="day" class="form-control form-control-sm" placeholder="Enter day here." value="">
          </div>
          <div class="form-group" style="padding: 0px; width: 300px;">
            <label for="day"><h6>Date:</h6></label>
            <input type="text" name="date" class="form-control form-control-sm" placeholder="Enter date here." value="">
          </div>
          <div class="form-group" style="padding: 10px 0px; width: 300px;">
            <label for="day"><h6>Year:</h6></label>
            <input type="number" name="year" class="form-control form-control-sm" placeholder="Enter year here." value="">
          </div>
      <div>
          <div class="col-6" style="margin: 0px auto;">            
          <input type="submit" value="Submit">
      </div>
      </form>
