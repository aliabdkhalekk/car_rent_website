<?php

include("Config.php");
include("sess_start.php");
$name = $_POST['names'];
$brand = $_POST['brandd'];
$price = $_POST['pricee'];
$img = $_POST['imgg'];
$id = $_SESSION['iddd'];
//$id = $_SESSION['iddd']; // get id through query string
$ed = mysqli_query($con,"UPDATE `cars` SET `name`='$name',`brand`='$brand',`price`='$price',`img`='$img' WHERE  id = '$id'");

if($ed)
{
    mysqli_close($con); // Close connection
    header("location:all cars.php"); // redirects to all records page
    // exit;
}
else
{
    echo "Error editing  record"; // display error message if not delete
}

?>