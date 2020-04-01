<?php

DEFINE ('DB_USER','id13105329_seta');
DEFINE ('DB_PASSWORD','qqZ(w#okA&ijOTfGps24');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','id13105329_books');



$dbc = mysql_connect(DB_HOST , DB_USER ,DB_PASSWORD);
if(!dbc){
	die("Database connection failed: " . mysqli_error ($dbc));
	exit ();
}

$dbs = mysql_select_db($dbc , DB_NAME);
if (!dbs){
	die("Database selection failed: " . mysqli_error ($dbc));
	exit ();
}

$Bookname = mysqli_real_escape_string($dbc, $_GET['Bookname']);
$Pages = mysqli_real_escape_string($dbc, $_GET['Pages']);
$Prize = mysqli_real_escape_string($dbc, $_GET['Prize']);
$Author = mysqli_real_escape_string($dbc, $_GET['Author']);
$Copies = mysqli_real_escape_string($dbc, $_GET['Copies']);

$query = "INSERT INTO books (bookname , pages , prize , author , copies) VALUES ($Bookname,$Pages,$P
,$Author,$Copies)";

$result = mysqliquery($dbc , $query) or trigger_error("Query MySQL Error: ".mysqli_error($dbc));

mysqli_close($dbc);
?>