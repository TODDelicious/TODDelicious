<?php

if(!isset($_POST['Anm�lare'])){
	die(
	header('Location: /form.php')
	);
}
require_once('../../SQL Files/connection/mysql_connect_db_random.php');
// ger variabel $dbc
 
 
 $query = 'INSERT INTO felanmalningar(Anm�lare,Mail,Kort_beskrivning,Detaljerad_beskrivning,Prioritet) 
VALUES("'
. $_POST['Anm�lare'] .'","'
. $_POST['Mail'] . '","'
. $_POST['Kort_beskrivning'] .'","'
. $_POST['Detaljerad_beskrivning'] .'","'
. $_POST['Prioritet'].'");';

mysqli_query($dbc,$query);







?>