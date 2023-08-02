<?php
$Host = "localhost";
$Username = "root";
$Password = "";
$DB_Name = "sanby";

$con = mysqli_connect($Host, $Username, $Password, $DB_Name) or die("Couldn't connect to db");

function test_input($input)
{
	$input = htmlspecialchars($input);
	$input = trim($input);
	$input = stripslashes($input);
return $input;
}
?>
