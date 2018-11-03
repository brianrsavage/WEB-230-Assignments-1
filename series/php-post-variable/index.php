<?php
      // 01. Explain what this variable will be used for and how.
      // $match used to set the correct password so that the user input password can be compared against it, therefore allowing or denying the user access.
      $match = 'pass123';
      if ( isset($_POST['password']) ) {
        $password = $_POST['password'];
        $msg = '';
        $msgType = 'success';
        // 02. Explain the process of the following if statment.
        // The if statement first checks to see if the $password is empty. If the $password is not empty and it matches the $match variable, text will be echoed out stating that the password is correct. If the $password is not empty and it does not match the $match variable, text will be echoed out stating that the password is incorrect. If the $password is empty, text will be echoed out to remind the user to enter a password.
        if ( !empty($password)) {
          if($password == $match){
            echo 'That is correct!';
          }else{
            echo 'That is incorrect!';
          }
        }else{
          echo 'Please enter a password.';
        }
      }
    ?>
        <form action="index.php" method="POST">
            Password:<br>
            <input type="password" name="password"><br><br>
            <input type="submit" class="btn" value="Submit">
        </form>