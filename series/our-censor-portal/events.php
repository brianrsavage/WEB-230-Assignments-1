<?php
 $pageTitle = "- events";
?>

<?php
require_once( 'include/config.inc.php' );
?>

<?php
require_once( 'include/header.inc.php' );
?>
	
<?php
  $event = array('Blue Jeans Day'=>
                    array('October 12, 2018', 'All employees may wear jeans to work.'),
				'Leave early day'=>
                    array('December 22, 2018', 'All employees may leave work, with pay, at lunch<br/> on this day to get started on their holiday plans.'),
                'Christmas Holiday Closing'=>
                        array('December 23, 2018', 'December 27, 2018'));

  foreach ($event as $element => $inner_array) {
    echo '<br><br/><h4>'.$element.'</h4>';
    foreach ($inner_array as $item) {
      echo $item.'<br/>';
    }
  }
?>


<?php
require_once( 'include/footer.inc.php' );
?>