<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>الهاشمي للسيارات</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/ADMINRESERve.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/System-Status.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
    <?php
    include("navbar_admin.php");
    ?>
    <style>
        td{border: 1px solid black ; font-weight: bold; text-align: center; }
        table{border: 2px solid black;}
        .center {margin-left: auto;margin-right: auto;}
    </style>
</head>

<body>
<div class="d-flex flex-column justify-content-center" id="login-box">
    <div class="login-box-header">
        <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Cars Details</h4>
        <table class="center">

            <div class="table-responsive table table-hover table-bordered results">
                <table class="table table-hover table-bordered">
                    <thead class="bill-header cs">
                    <tr>
                        <th id="trs-hd-1" class="col-lg-1">ReservationID</th>
                        <th id="trs-hd-2" class="col-lg-2">UserID</th>
                        <th id="trs-hd-3" class="col-lg-3">CarID</th>
                        <th id="trs-hd-3" class="col-lg-3">ColorID</th>
                        <th id="trs-hd-4" class="col-lg-2">NAME</th>
                        <th id="trs-hd-5" class="col-lg-2">Email</th>
                        <th id="trs-hd-5" class="col-lg-2">Phone</th>
                        <th id="trs-hd-5" class="col-lg-2">CarName</th>
                        <th id="trs-hd-5" class="col-lg-2">color</th>
                        <th id="trs-hd-6" class="col-lg-2">Delete</th>
                    </tr>
                    </thead>
                    <tbody>


            <?php

            include("Config.php");

            $records = mysqli_query($con,"select * from reserve"); // fetch data from database

            while($data = mysqli_fetch_array($records))
            {
                ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['u_id']; ?></td>
                    <td><?php echo $data['cr_id']; ?></td>
                    <td><?php echo $data['cl_id']; ?></td>
                    <?php
                    $u__id = $data['u_id'];
                    $recordss = mysqli_query($con, " SELECT  `name`, `email`, `phone` FROM `user` WHERE id = '$u__id'");
                    $datas = mysqli_fetch_array($recordss);
                    ?>
                    <td><?php echo $datas['name']; ?></td>
                    <td><?php echo $datas['email']; ?></td>
                    <td><?php echo $datas['phone']; ?></td>
                    <?php
                    $cr__id = $data['cr_id'];
                    $recordssss = mysqli_query($con, " SELECT  `name` FROM `cars` WHERE id = '$cr__id'");
                    $datasss = mysqli_fetch_array($recordssss);
                    ?>


                    <td><?php echo $datasss['name']; ?></td>

                    <?php
                    $cl__id = $data['cl_id'];
                    $recordsss = mysqli_query($con, " SELECT  `color` FROM `color` WHERE id = '$cl__id'");
                    $datass = mysqli_fetch_array($recordsss);
                    ?>
                    <td><?php echo $datass['color']; ?></td>
<!--                    <td><a href="edit.php?id=--><?php //echo $data['id']; ?><!--">Edit</a></td>-->
                    <td><a href="Reserve_delete.php?id=<?php echo $data['id']; ?>"><button class="btn btn-danger" style="margin-left: 5px;" type="submit"><i class="fa fa-trash" style="font-size: 15px;" </i></button></a></td

                </tr>
                <?php
            }
            ?>
        </table>
        <div class="email-login" style="background-color:#ffffff;"></div>
            </div>
            </tr>
            </tbody>
        </table>
    </div>

</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>