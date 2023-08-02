
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
        <h4 style="color:rgb(139,139,139);margin-bottom:0px;font-weight:400;font-size:27px;">Test Drive</h4>
        <table class="center">

                <div class="table-responsive table table-hover table-bordered results">
                    <table class="table table-hover table-bordered">
                        <thead class="bill-header cs">
                        <tr>
                            <th id="trs-hd-1" class="col-lg-1">UserID.</th>
                            <th id="trs-hd-2" class="col-lg-2">NAME</th>
                            <th id="trs-hd-3" class="col-lg-3">Email</th>
                            <th id="trs-hd-5" class="col-lg-2">Phone</th>
                            <th id="trs-hd-5" class="col-lg-2">Address</th>

                        </tr>
                        </thead>
                        <tbody>





            <?php

            include("Config.php");

            $records = mysqli_query($con,"SELECT `id`, `name`, `email`, `phone`, `address` FROM `user` "); // fetch data from database

            while($data = mysqli_fetch_array($records))
            {
                ?>
                <tr>
                    <td><?php echo $data['id']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td><?php echo $data['address']; ?></td>

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
<script src="assets/js/Table-With-Search.js"></script>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>