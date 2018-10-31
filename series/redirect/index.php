<h1>My Page</h1>

<?php
    $redirect_page = 'http://google.com';
    $redirect = true;
    if($redirect == true){

    /*
        01. Explaine what is happening here.
        Because of the earlier variables and function, the $redirect is being read as true, 
        and therefore, the page is being redirected to the site declared in $redirect_page.
    */
      header('Location: '.$redirect_page);
    }
 ?>
