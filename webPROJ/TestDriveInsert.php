
<?php
include_once  ("Config.php");


include("navbar_user.php");

//////////////////car name /////////////////////////
$Cname= $_POST['ddl'];

$sql1 = "SELECT `id` FROM `cars` WHERE name= '$Cname' ";
$q23 = mysqli_query($con, $sql1);
$aa = mysqli_fetch_assoc($q23);
///////////////////////usid////////
 $user_idse= $_SESSION['user'];
 echo  $_SESSION['user'];
///////////////////////////////////////////////////////

                                                                            //carid                 col
$sql = "INSERT INTO `test_drive` (`id`,`date` ,`u_id`,`c_id`) VALUES (NULL,'$_POST[date]','$user_idse','$aa[id]')";

if(! mysqli_query($con,$sql)){
    echo "Error ".mysqli_error($con);
}else{

    header("location: HOME PAGE.php");
}


?>
