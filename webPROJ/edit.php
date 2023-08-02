
<!DOCTYPE html>
<html>
<head>
    <?php
    include("navbar_admin.php");
    $_SESSION['iddd']= $_GET['id'];

    ?>
    <div class="mb-3"><link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"></div>
    <div class="mb-3"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"></div>
    <div class="mb-3"><link rel="stylesheet" href="assets/css/EDIT.css"></div>
    <div class="mb-3"><link rel="stylesheet" href="assets/css/Simple-Slider.css"></div>
    <div class="mb-3"><link  rel="stylesheet" href="assets/css/styles.css"></div>
</head>
<body>
<div>
    <section class="contact-clean">
<form action = "editin.php" method = "POST">
    <h2 class="text-center">EDIT</h2>
    <div class="mb-3"><input class="form-control" type = "text" name ="names"placeholder="name"/></div>

    <div class="mb-3"><input class="form-control" type = "text" name ="brandd"placeholder="brand"/></div>

    <div class="mb-3"><input class="form-control" type = "number" name="pricee"placeholder="price"/></div>
    <div class="mb-3"><input type = "text" name ="imgg"placeholder="Image URL"/></div>

    <div class="mb-3"><input  class="btn btn-primary" type = "submit" value="INSERT"/></div>

</form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</div>
</body>

</html>
