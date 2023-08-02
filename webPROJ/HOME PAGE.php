<?php
include("Config.php");
session_start();
?>

<!DOCTYPE html>
<html>
<script src="http://www.w3schools.com/lib/w3data.js"></script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>الهاشمي للسيارات</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <?php
        include("navbar_user.php");
    ?>
    <style>
        td{border: 1px dashed black}
        .img_show{width: 200px; height: auto;}
        .txt_center{text-align: center; font-size: 30px; font-family: "Times New Roman"}
    </style>
</head>

<body>
    <br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img.besthqwallpapers.com/Uploads/14-11-2019/111390/peugeot-2008-gt-4k-crossovers-2020-cars-tuning.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://newevolutiondesigns.com/images/freebies/car-wallpaper-4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://wallpaperaccess.com/full/11207.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://www.hdcarwallpapers.com/walls/4k_2017_ford_gt-wide.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://www.hdcarwallpapers.com/walls/2016_rolls_royce_vision_next_100_7-wide.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- read cards -->

<!--    show cars under slider -->
    <?php
    $sql = "SELECT * FROM cars";
    $result = mysqli_query($con, $sql);
    $counter = 0;
    ?>
    <table>
        <tr>
     <?php

    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            if ($counter == 4)
            {
                ?> </tr><tr/><?php $counter = 0;
            }
            ?>   <td>     <div class="container">
                <div class="row product-list dev">
                    <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
                        <div class="product-container">
                            <div class="row">
                                <div class="col-md-12 img_show"><a id="car_show"class="product-image " ><?php echo "<img src= $row[img]>"?></a></div>
                            </div>
                            <div class="row">
                                <div style="width: auto">
                                    <h2 > <?php echo $row["brand"]. " ". $row["name"] ; ?> </h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div style="text-align: left">
                                            <p class="product-price " style="text-align: start">Price:<?php echo $row["price"]?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </td>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
      <?php $counter++; }
    }
    else
    {
        echo "0 results";
    }
    ?>
        </tr>
    </table>
</body>
<div w3-include-html="footer.html"></div>
<script>
    w3IncludeHTML();
</script>

</html>