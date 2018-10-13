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