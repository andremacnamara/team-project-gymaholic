<?php 
session_start();
//connect.php
$server	    = 'localhost';
$username	= 'x14402132';
$password	= '';
$database	= 'c9';

if(!mysql_connect($server, $username, $password))
{
 	exit('Error: could not establish database connection');
}
if(!mysql_select_db($database))
{
 	exit('Error: could not select the database');
}

$bioinput = $_POST['title'];

$sql = "INSERT INTO user (user_bio)
VALUES ($bioinput)";
//if connection successful go to this page 

?>