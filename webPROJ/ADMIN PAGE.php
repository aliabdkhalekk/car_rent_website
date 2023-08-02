<?php
include ("navbar_admin.php");
include("Config.php");


?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
            <title>Untitled</title>
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/styles.css">
        </head>

        <body>
        <div>
            <div class="container">
                <h2 class="display-4" style="font-size: 50px;">DATA BASE</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="font-size: 25px;">TOTAL&nbsp;&nbsp;</th>
                            <th class="text-center" style="font-size: 25px;">VIEW</th>

                        </tr>
                        </thead>
                        <tbody>


                        <tr>
                            <?php
                            $records = mysqli_query($con,"select count(id) as total from  cars"); // fetch data from database


                            while($data = mysqli_fetch_array($records))
                            {

                                ?>
                                <td style="line-height: 60px;font-size: 20px;">CARS:<?php echo $data['total'];?> </td>
                                <td><a href="all%20cars.php?id=<?php echo $data['total']; ?>" <button class="btn btn-primary active text-center d-block pull-right" type="button" style="height: 61px;background-color: #008000;"><label class="form-label" style="font-size: 35px;">&nbsp; &nbsp; VIEW&nbsp; &nbsp;&nbsp;</label></button></a></td>

                            <?php  }?>
                        </tr>

                        <tr>
                            <?php
                            $records = mysqli_query($con,"select count(id) as total from  user"); // fetch data from database


                            while($data = mysqli_fetch_array($records))
                            {

                                ?>
                                <td style="line-height: 60px;font-size: 20px;">USERS:<?php echo $data['total'];?> </td>
                                <td><a href="USERSVIEW.php?id=<?php echo $data['total'];; ?>" <button class="btn btn-primary active text-center d-block pull-right" type="button" style="height: 61px;background-color: #008000;"><label class="form-label" style="font-size: 35px;">&nbsp; &nbsp; VIEW&nbsp; &nbsp;&nbsp;</label></button></a></td>

                            <?php  }?>
                        </tr>
                        <tr>
                            <?php
                            $recordsss = mysqli_query($con,"select count(id) as totalss from  color"); // fetch data from database
                            while($dataaa = mysqli_fetch_array($recordsss))
                            {

                                ?>
                                <td style="font-size: 20px;line-height: 60px;">COLORS:<?php echo $dataaa['totalss'];?></td>
                                <td><a href="COLORVIEW.php?id=<?php echo $dataaa['totalss']; ?>" <button class="btn btn-primary active text-center d-block pull-right" type="button" style="height: 61px;background-color: #008000;"><label class="form-label" style="font-size: 35px;">&nbsp; &nbsp; VIEW&nbsp; &nbsp;&nbsp;</label></button></a></td>
                            <?php  }?>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container">
                <h2 class="display-4" style="font-size: 50px;">REQUESTS</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="font-size: 25px;">Total Requests &nbsp;&nbsp;</th>
                            <th class="text-center" style="font-size: 25px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;View</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="font-size: 20px;line-height: 60px;">MASSGES</td>
                            <td><a href="Admin_Contct%20Us.php" <button class="btn btn-primary active text-center d-block pull-right" type="button" style="height: 61px;background-color: #008000;"><label class="form-label" style="font-size: 35px;">&nbsp; &nbsp;VIEW&nbsp; &nbsp;&nbsp;</label></button></a></td>
                        </tr>
                        <tr>
                            <td style="font-size: 20px;line-height: 60px;">RESEVATION</td>
                            <td><a href="admin%20reserve.php" <button class="btn btn-primary active text-center d-block pull-right" type="button" style="height: 61px;background-color: #008000;"><label class="form-label" style="font-size: 35px;">&nbsp; &nbsp; VIEW&nbsp; &nbsp;&nbsp;</label></button></a></td>
                        </tr>
                        <tr>
                            <td style="font-size: 20px;line-height: 60px;">TestDrive</td>
                            <td><a href="AdminTestDrive.php" <button class="btn btn-primary active text-center d-block pull-right" type="button" style="height: 61px;background-color: #008000;"><label class="form-label" style="font-size: 35px;">&nbsp; &nbsp; VIEW&nbsp; &nbsp;&nbsp;</label></button></a></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        </body>

        </html>