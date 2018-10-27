<?php
  // 01. Explaine what the time function is.
  // The time function is a tool used to provide information about the date and time.
  $time = time();
  
  // 02. Explain what the following line of code is doing and how.
  // the actual time is being calculated by using the date function which takes two functions (how you want the date to be displayed, and the timestamp), to process the timestamp and show it correctly.
  $actual_time = date('D M Y @ H:i:s', $time);
  
  // 03. Explain what the following line of code is doing and how.
  // The time modified is being calculated in the same manner as the actual time, but is being displayed differently with the lowercase 'd' for day and the removal of the portion that displays the minutes.
  $time_modified = date('d M Y @ H:s', $time);
  
  // 04. Explain a way the $actual_time might be used in a web application.
  // The $actual_time could be used to display the current time for the business, especially if it's set in a specific location with certain hours of operation.
  echo '<h3>The current time is: '.$actual_time.'<h3>';
  
  // 05. Explain a way the $time_modified might be used in a web application.
  // The $modified_time could be helpful with countdowns or recent events relevant to the website. It could also be used to display the current time in other time zones.
  echo '<h3>The modified time is: '.$time_modified.'<h3>';
?>