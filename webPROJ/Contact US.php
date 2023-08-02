<?PHP
include("Config.php");

$sql ="insert into contact_us (name ,email,message) values ('$_POST[name]','$_POST[email]','$_POST[message]')";
if(! mysqli_query($con,$sql))
{
    echo "Error".mysqli_error($con);
}
else
{
    header("location: HOME PAGE.php");
}
?>