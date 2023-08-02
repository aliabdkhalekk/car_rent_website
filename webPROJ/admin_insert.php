<?PHP
include("Config.php");
if (isset($_POST['name'])&&isset($_POST['brand'])&&isset($_POST['price'])&&isset($_POST['img']))
{
    $name = $_POST['name'];
    $name = test_input($name);

    $brand = $_POST['brand'];
    $brand = test_input($brand);

    $price = $_POST['price'];
    $price = test_input($price);

    // $type = $_POST['type'];
    $selects = "SELECT type FROM types where type_names = '$_POST[ddl]'";
    $q = mysqli_query($con, $selects);
    $q2 = mysqli_fetch_assoc($q);

    $img = $_POST['img'];
    $img = test_input($img);

    $sql = "INSERT INTO `cars` (`id`, `name`, `brand`, `price`, `type`, `img`) VALUES(NULL,'$_POST[name]','$_POST[brand]','$_POST[price]','$q2[type]','$_POST[img]')";

    if (! mysqli_query($con, $sql))
    {
        echo "Error".mysqli_error($con);

    }
    else
    {
        echo "the car was added";

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>الهاشمي للسيارات</title>
    <div class="mb-3"><link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"></div>
    <div class="mb-3"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"></div>
    <div class="mb-3"><link rel="stylesheet" href="assets/css/insert.css"></div>
    <div class="mb-3"><link rel="stylesheet" href="assets/css/Simple-Slider.css"></div>
    <div class="mb-3"><link  rel="stylesheet" href="assets/css/styles.css"></div>
    <?php
    include("navbar_admin.php");
    ?>
</head>
<body>
<div>
<section class="contact-clean">
<form action = "admin_insert.php" method = "POST">
    <h2 class="text-center">Insert to cars</h2>
<div class="mb-3"><input class="form-control" type = "text" name ="name"placeholder="name"/></div>

   <div class="mb-3"><input class="form-control" type = "text" name ="brand"placeholder="brand"/></div>

    <div class="mb-3"><input class="form-control" type = "number" name="price"placeholder="price"/></div>



    <?php
    $row='';
    $sql = "SELECT * FROM types ";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0)
    {?> <select name="ddl" >
        <option selected disabled>Car Type</option>
        <?php while($row = mysqli_fetch_assoc($result))
        { ?>

            <option class="btn btn-primary" value= <?php echo $row["type_names"];?>><?php echo $row["type_names"];?></option><br><br>
        <?php }?>
        <?php }
        else
        {
            echo "0 results";
        }
        ?>
    </select>
<br><br>
     <div class="mb-3"><input type = "text" name ="img"placeholder="Image URL"/></div>

    <div class="mb-3"><input  class="btn btn-primary" type = "submit" value ="INSERT"/></div>
</form>
</section>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</div>
</body>

</html>