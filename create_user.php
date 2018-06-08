<?php
$servername = "localhost";
$username_db = "ismahene";
$userpwd_db = "PpfbfQrCmsfUI3d7";
$db_name = "go_ismahene";

try
{
	$db = new PDO("mysql:host=$servername; dbname=$db_name", $username_db, $userpwd_db);
	$q1 = $_GET["q1"];
	$q2 = $_GET["q2"];
	$q3 = $_GET["q3"];
	$q4 = $_GET["q4"];
	$q5 = $_GET["q5"];
	$sql = "INSERT INTO reponsebot(q1, q2, q3, q4, q5) VALUES ($q1, $q2, $q3, $q4, $q5)";
}
catch(PDOException $e)
{
	print($e->getMessage()."<br/>");
	die();
}
?>
