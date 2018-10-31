<?php
  $http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
  echo '<h3>$http_client_ip is: '.$http_client_ip.'</h3>';

  $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
  echo '<h3>$http_x_forward_for is: '.$http_x_forwarded_for.'</h3>';

  $remote_addr = $_SERVER['REMOTE_ADDR'];
  echo '<h3>$remote_addr is: '.$remote_addr.'</h3>';

	/* 	
  	01. Explain what the following conditional statment is doing.
  	This statement is supposed to be checking to see if the $http_client_ip is not empty 
	-- if it isn't, the $ip_address will be the $http_client_ip. It then checks to see if 
	the $http_x_forwarded_for is not empty -- if it isn't, the $ip_address will be 
	the $http_x_forwarded_for. If either of these are empty, the $ip_address should 
	be $remote_addr, but for whatever reason, it isn't working correctly and I'm just 
	getting errors.
	*/
  if (!empty($http_client_ip)) {
	$ip_address = $http_client_ip;
  } else if (!empty($http_x_forwarded_for)) {
	$ip_address = $http_x_forwarded_for;
  } else {
	$ip_address = $remote_addr;
  }

  echo '<h3>$ip_address is: '.$ip_address.'</h3>';
 ?>
