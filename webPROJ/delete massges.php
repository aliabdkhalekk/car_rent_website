<?php

include("Config.php");

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con,"delete from contact_us where id = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:Admin_Contct us.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>