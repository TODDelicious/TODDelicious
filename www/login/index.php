<?php
session_start(); // Starta session

if(!@$_SESSION['loggedIn']){ // Om man inte �r inloggad
	header('Location: login.php'); // Skickas till login.php
}


if(@$_SESSION['timeout']+ 60*10 < time()){ //Om Sessionstiden + 10(60sekunder*10) minuter �r mindre �n nuvarande tid
	session_destroy(); // Avsluta sessionen
	session_unset(); // Avsluta sessionen (gammalt s�tt)
	$meddelande = 'hej d�'; // Meddelande till anv�ndare = Hej d�
}else{ //Sessionen fortfarande aktiv
	$meddelande = 'hej'; // Meddeladne till anv�ndare = Hej
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
}

echo $meddelande; // Visa meddelande ( Hej = Inloggad | Hej d� = Utloggad)
?>