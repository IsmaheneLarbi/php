#!/usr/bin/php
<?php

$servername = "37.59.53.29";
$username_db = "ismahene";
$userpwd_db = "PpfbfQrCmsfUI3d7";
$db_name = "go_ismahene";


try
{

	$con = mysqli_connect($servername, $username_db, $userpwd_db, $db_name );
	echo"you've connected successfully\n";
        $q1 = $_GET["q1"];
	$q2 = $_GET["q2"];
	$q3 = $_GET["q3"];
	$q4 = $_GET["q4"];
	$q5 = $_GET["q5"];
print("inserting...\n");
if (!$rqst = $con->query("INSERT INTO reponsesbot(q1, q2, q3, q4, q5) VALUES('$q1', '$q2', '$q3', '$q4', '$q5')"))
    if(!($rqst))
        echo "nope\n";
    else
        echo "done\n";

}
catch(PDOException $e)
{
	print($e->getMessage()."\n");
	die();
}
?>

affiche ca!
