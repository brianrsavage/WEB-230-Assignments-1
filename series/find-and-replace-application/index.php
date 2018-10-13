<?php

// Question 1
// the offset variable is used as a point to start the search, in this case 0 - the beginning of the text. This will help us later when adding code to search for multiple instances.
  $offset = 0;

// Question 2
// Checks to see if the form has been submitted so that data isn't being processed unless the user has clicked the 'submit' button.
  if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){

// Question 3
// The variable has to be made in the if statement, since if it is made outside of the if statement and is not found, it could return an error.
    $text = $_POST['text'];
    $search = $_POST['searchfor'];
    $replace = $_POST['replacewith'];

// Question 4
// We need this variable to access it later in the offset variable, to calculate the new offset.
    $search_length = strlen($search);
      if(!empty($text)&&!empty($search)&&!empty($replace)){
        while ($strpos = strpos($text, $search, $offset)) {
 
// Question 5
// The offset variable is changed so that the search begins again after a found word instance.
          $offset = $strpos + $search_length;

// Question 6
// Finding the text, the word the user specified to use as a replacement, finding the string position and the length of the word the user searched for, then putting it all together.
          $text = substr_replace($text, $replace, $strpos, $search_length);
        }
        echo $text;
      } else {

// Question 7
// If the fields are not filled in, the form is not completed, therefore the form cannot be submitted and processed. This is used as a reminder to fill in all fields so the script can be completed.
        echo 'Please fill in all fields.';
      }
  }
?>

<hr>

<!-- Question 8 -->
<!-- Action attribute specifies where to send form data -->
<!-- Method attribute specifies how to send form data -->

<form action="index.php" method="POST">

  <textarea name="text" rows="6" cols="30"></textarea><br><br>

  Search for:<br>
  <input type="text" name="searchfor"><br><br>

  Replace with:<br>
  <input type="text" name="replacewith"><br><br>

<!-- Question 9 -->
<!-- Type attribute specifies what type of input is displayed (i.e. submit, button) -->
<!-- Value attribute specifies the value of the input (such as text for a button or in a field) -->

  <input type="submit" value="Find and Replace">

</form>