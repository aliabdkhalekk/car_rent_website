<?php
include_once("Config.php");
include("navbar_user.php");

//////////////////car name /////////////////////////
$Cname= $_POST['ddl'];

$sql1 = "SELECT `id` FROM `cars` WHERE name= '$Cname' ";
$q23 = mysqli_query($con, $sql1);
$aa = mysqli_fetch_assoc($q23);
//////////color////////
$color= $_POST['ddl2'];
$sql2 = "SELECT id FROM `color` WHERE color = '$color' ";
$result1 = mysqli_query($con, $sql2);
$q2 = mysqli_fetch_assoc($result1);
//////////////////////////////////user id ///////////
$user_idse= $_SESSION['user'];
///////////////////////////////////////////////////////
// $aa['id'] = test_input($aa['id']);
// $user_idse=test_input($user_idse);
// $q2=test_input($q2);

$sql = "INSERT INTO `reserve` (`id`,`u_id`,`cr_id` ,`cl_id`) VALUES (NULL,'$user_idse','$aa[id]','$q2[id]')";

if(! mysqli_query($con,$sql)){
    echo "Error ".mysqli_error($con);
}else{

    include 'HOME PAGE.php';
}


?>
