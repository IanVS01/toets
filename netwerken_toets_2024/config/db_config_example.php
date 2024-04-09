<?php

$dbhost = 'localhost';
$dbuser = 'net24ispanje_toetsPersoon';
$dbpass = '7F61=Jb!l!VD';
$dbname = 'net24ispanje_toetsp3';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
?>