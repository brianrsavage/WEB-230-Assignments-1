<?php
 $pageTitle = "- Internal Communications";
?>

<?php
require_once( 'include/config.inc.php' );
?>

<?php
require_once( 'include/header.inc.php' );
?>
	
<?php
	$user_input = '';
	$search = 'Acme';
	$replace = 'Insights';
	if ( isset( $_POST[ 'user_input' ] ) && !empty( $_POST[ 'user_input' ] ) ) {
		$user_input = $_POST[ 'user_input' ];

	} else {
		echo '<br><br> Please fill in the text field.';
	}
?>


<?php
	$user_input_new = str_ireplace( $search, $replace, $user_input );
?>


	<form action="internal-communications.php" method="POST">
		<textarea name="user_input" rows="6" cols="30"><?php echo $user_input_new; ?></textarea>
		<br><br>
		<input type="submit" value="submit">
	</form>

<?php
require_once( 'include/footer.inc.php' );
?>