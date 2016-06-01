<?php
session_start();
?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="main.css">
		<title>Recycle.se</title>
	</head>
	<body>	
		<div class ="login_bar">
			<p class ="login_text">
				<!-- Ifall man inte är inloggad står dessa i login baren -->
				<?php
					if (!isset($_SESSION['loggedIn'])) {		
				?>
					<a href="main.php?page=Shopcart">
					Cart
					</a> / 
					<a href="main.php?page=login">
					Login
					</a> / 
					<a href="main.php?page=register">
					Register
					</a>
				<?php
				}
				// Ifall man inte är inloggad står dessa i login baren
				else {
				?>
					<a href="main.php?page=Shopcart">
						Kundvagn
					</a> / 
						Logged in as:
						<?php
						echo $_SESSION["name_log_in"];
						?>
						<a href="log_out.php">
							/ Log out
						</a>
					<?php
					}
				?>
			</p>
		</div>
	</body>
</html>