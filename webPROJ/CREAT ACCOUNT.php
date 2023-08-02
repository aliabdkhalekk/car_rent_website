<?php
include("Config.php");
include("navbar_user.php");
if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['address'])&&isset($_POST['password']) )
{        // id , name , email , phone , address ,password     &&($_POST['password']== $_POST['Rewrite password'])

    $name = $_POST['name'];
    $name = test_input($name);

    $email = $_POST['email'];
    $email = test_input($email);

    $phone = $_POST['phone'];
    $phone = test_input($phone);

    $address = $_POST['address'];
    $address = test_input($address);

    $pass = $_POST['password'];
    $pass = test_input($pass);



    $sql = "INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `password`) VALUES(NULL,'$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[address]','$_POST[password]')";

    if (! mysqli_query($con, $sql))
    {
        //echo "Error".mysqli_error($con);

    }
    else
    {
        echo "your account was created";

    }

    header("location: Login.php");
}
else {
    ?>
    <div> <small class="form-text text-danger">there something wrong .</small> </div> <?php ;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Creat Account</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Creat account-Form-Clean css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="http://www.w3schools.com/lib/w3data.js"></script>
    <script>
        function validateForm() {
            let x = document.forms["myForm"]["name"].value;
             let x1 = document.forms["myForm"]["email"].value;
            let x2= document.forms["myForm"]["phone"].value;
          let x3 = document.forms["myForm"]["address"].value;
          let x4 = document.forms["myForm"]["password"].value;


            if (x == ""  ) {
                alert(" name must be filled out");
                return false;
            }
            if (x1 == "" ) {
                alert("email must be filled out");
                return false;
            }if (x2 == "" ) {
                alert("phone must be filled out");
                return false;
            }if (x3 == "" ) {
                alert(" address must be filled out");
                return false;
            }if (x4 == "" ) {
                alert(" password must be filled out");
                return false;
            }
        }
    </script>

</head>

<body>
<div>

    <section class="contact-clean">
        <form name="myForm" action="CREAT%20ACCOUNT.php"method="post"onsubmit="return validateForm()">
            <h2 class="text-center">Creat Account</h2>
            <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"  ></div>
            <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"  ></div>
            <!-- <small class="form-text text-danger">Please enter a correct email address.</small> -->
            <div class="mb-3"><input class="form-control" type="number" name="phone" placeholder="Number" ></div>
            <div class="mb-3"><input class="form-control" type="text" name="address" placeholder="Address" ></div>

            <div class="mb-3"><input  class="form-control" type="password" name="password" placeholder="Password" id="Password"  ></div>
            <!--            (?=.\d) = at least one digit - (?=.[a-z]) = at least one small character - (?=.*[A-Z]) = at least one capital character - .{8,} = length of at least 8 -->
            <div class="mb-3"><button class="btn btn-primary" type="submit">Create Account </button></div>

        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</div>

</body>
<div w3-include-html="footer.html"></div>
<script>
    w3IncludeHTML();
</script>

</html>
