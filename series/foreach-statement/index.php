<?php
  $food = array('healthy'=>
                    array('salad', 'vegtable', 'pasta'),
                'unhealthy'=>
                        array('pizza', 'ice cream', 'popcorn'));
  foreach ($food as $element => $inner_array) {
    echo '<strong>'.$element.'</strong><br/>';
    foreach ($inner_array as $item) {
      echo $item.'<br/>';
    }
  }
?>