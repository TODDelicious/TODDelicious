<?php

session_start(); //Starta sessionen

if(@$_SESSION['loggedIn']){ //Kolla om man �r inloggad
	header('Location: index.php'); // Om man �r inloggad skickas man till index.php
}

?>
	
<!-- INLOGGNINGSFORUML�R  -->
<!DOCTYPE html>
<html>

	<head>

		<link rel="Stylesheet" href="/Projekt/Felanmalan/CSS/Anmalan.css" >

	</head>
	
	<body>
		
		<p id="rubrik"> Login </p>

		<main>
		
			<table id="admin">
			
				<form action="verification.php" method="post">

				<tr>
						<td>
							<p> Namn: </p><br>
							<input type="text" name="Name" required>
						</td>
					</tr>
					
					<tr>
						<td>
							<p>L�senord:</p><br>
							<input type="password" name="Password"  required>
						</td>
					</tr>
					
					<tr>
						<td class="center">
							<input type="submit" name="Submit" value="Login">
						</td>
					</tr>
					
				</form>
				
			</table>
			
		</main>
	
	</body>
	
</html>
<!-- SLUT P� FORMUL�R -->