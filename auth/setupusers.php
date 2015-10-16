<?php //setupusers.php
require_once 'login.php';
$db_server = mysqli_connect($db_hostname, $db_username, $db_password); 
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error()); 
mysqli_select_db($db_server, $db_database) or die("Unable to select database: " . mysql_error()); 


$query = "CREATE TABLE users (
			forename VARCHAR(32) NOT NULL, 
			surname VARCHAR(32) NOT NULL, 
			username VARCHAR(32) NOT NULL UNIQUE, 
			password VARCHAR(32) NOT NULL 
	)";


$result = mysqli_query($db_server, $query); 
if(!$result) die("Database access failed: " . mysqli_error($db_server)); 

$salt1 = "z0on!";
$salt2 = "&!h*"; 

$forename = 'Bill'; 
$surname = 'Smith' ; 
$username = 'bsmith'; 
$password = 'mysecret'; 
$token = md5("$salt1$password$salt2");
add_user($db_server, $forename, $surname, $username, $token); 

$forename = 'Pauline'; 
$surname = 'Jones'; 
$username = 'pjones'; 
$password = 'acrobat';
$token = md5("$salt1$password$salt2"); 
add_user($db_server, $forename, $surname, $username, $token); 

function add_user($db, $fn, $sn, $un, $pw){
	$query = "INSERT INTO users VALUES('$fn', '$sn', '$un', '$pw')";
	$result = mysqli_query($db, $query); 
	if(!$result) die("Databse access failed" . mysqli_error($db)); 
}
?>
