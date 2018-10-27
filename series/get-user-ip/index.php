<?php
  require 'config.inc.php';
  // 01. Explain what this foreach loop is doing.
  // Each element within the array created in the config.inc.php file is checked and compared to the current IP address. If the IP addresses match, the page will be killed using the die function.

    foreach ($ip_blocked as $ip) {
      if($ip == $ip_address){
        die('Your IP address, '.$ip_address.' has been blocked');
      }
    }
 ?>

 <h1>Welcome</h1>