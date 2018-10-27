<?php
  // 01. Explain why we use ob_start.
  // Since PHP is executed from the top of the script to the bottom, we use ob_start to turn on output buffering. This stores Generated HTML in a buffer and to be rendered after the last statement in the script.
  ob_start(); ?>

<h1>My Page</h1>
This is my page.

<?php
    $redirect_page = 'http://google.com';
    $redirect = true;
    if($redirect == true){
      // 02. Explain what is happening here.
      // // Because of the earlier variables and function, the $redirect is being read as true, and therefore, the page is being redirected to the site declared in $redirect_page.
      header('Location: '.$redirect_page);
    }
    // 03. Explain why we use ob_end_flush.
    // ob_end_flush flushes the buffer from ob_start, then produces the content back onto the page.
    ob_end_flush();
 ?>