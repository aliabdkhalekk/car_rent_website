<?PHP
include("Config.php");
include_once("sess_start.php");

if (isset($_POST['email']))
{
    $email = $_POST['email'];
    $pass = $_POST['password'];
     $email = test_input($email);
     $pass = test_input($pass);

    if ($email == "admin@admin" && $pass == "0000")
    {
        header("location:ADMIN PAGE.php");
    } else {
        $select = "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'";
        $s = mysqli_query($con, $select);
        $num = mysqli_num_rows($s);
        $user = mysqli_fetch_assoc($s);
        if ($num > 0)
        {
            // echo ($ss['email']);

            $_SESSION['user'] = $user['id'];
            header("location: HOME PAGE.php");
        } else
        {?>
            <script>
                alert("Wrong Email or Password!");
            </script><?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Box-En.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="http://www.w3schools.com/lib/w3data.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">

            <div style="text-align: center;">
                <a class="navbar-brand" href="HOME%20PAGE.php">الهاشمي للسيارات</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <form action="Login.php" method="POST">
        <div class="d-flex flex-column justify-content-center" id="login-box">
            <div class="login-box-header">
                <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Login</h4>
            </div>
            <div class="email-login" style="background-color:#ffffff;">
                <input type="email" name="email" class="form-control" style="margin-top:10px;" required placeholder="Email">
                <input type="password" name="password" class="form-control" style="margin-top:10px;" required placeholder="Password"></div>
            <div class="submit-row" style="margin-bottom:8px;padding-top:0px;"><button class="btn btn-primary d-block box-shadow w-100" id="submit-id-submit" type="submit">Login</button>
            </div>
            <div id="login-box-footer" style="padding:10px 20px;padding-bottom:23px;padding-top:18px;">
                <p style="margin-bottom:0px;">Don't you have an account?<a id="register-link" href="CREAT ACCOUNT.php">Sign Up!</a></p>
            </div>
        </div>
    </form>


    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!--footer-->

</body>

</html>