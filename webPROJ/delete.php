
<?php

include("Config.php");

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con,"delete from cars where id = '$id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:all cars.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>