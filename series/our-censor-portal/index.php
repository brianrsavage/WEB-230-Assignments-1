<?php
require_once( 'include/header.inc.php' );
?>

<?php
require_once( 'include/config.inc.php' );
?>

<section>
	
	<form action="index.php" method="POST">
		<textarea name="user_input" rows="6" cols="30"><?php echo $user_input_new; ?></textarea>
		<br><br>
		<input type="submit" value="submit">
	</form>

</section>

<?php
require_once( 'include/footer.inc.php' );
?>