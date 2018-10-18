<?php
require_once( 'include/config.inc.php' );
?>

<!doctype html>

<html>

<head>

	<meta charset="utf-8">

	<title>
		<?php echo $siteName; ?>
	</title>

	<meta name="description" content="inside out is a class project we use to learn html."/>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<script>
		var siteName = '<?php echo $siteName; ?>';
	</script>
	
	<?php
		function menuBuilder( $obj ) {
			echo( '<ul>' );
				foreach ( $obj as $key => $value ) {
					echo( '<li><a href="' . $value[ 'MenuLink' ] . '">' . $value[ 'MenuName' ] . '</a></li>' );
				}

			echo( '</ul>' );
		}
	?>

	<?php
		$menuItems = array( 'pages' =>
			array( 'MenuLink' => 'index.php', 'MenuName' => 'home' ),
			array( 'MenuLink' => 'events.php', 'MenuName' => 'events' ),
			array( 'MenuLink' => 'internal-communications.php', 'MenuName' => 'communications' )
		);
	?>

</head>


<body>

	<div id="wrapper">

		<header>
		<h1><a href="index.php"><?php echo $siteName; ?></a> <span><?php echo $pageTitle; ?></span></h1>
		<hr>

			


			<nav>
				<?php echo menuBuilder($menuItems); ?>
			</nav>

			<h2>Connecting to our colleagues</h2>
		</header>

		<section>