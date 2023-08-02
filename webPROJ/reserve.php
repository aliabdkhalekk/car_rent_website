

<?php
include_once  ("Config.php");
include("navbar_user.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>contact us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Reserve.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="http://www.w3schools.com/lib/w3data.js"></script>
    <title>الهاشمي للسيارات</title>
    <div w3-include-html="navbar_user.php"></div>
</head>

<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <section  class="contact-clean">
        <form action="resrve-insert.php" method="post">
            <h2 class="text-center">Reserve Car&nbsp;</h2>
            <div class="mb-3"></div>
            <div class="mb-3">

                <?php
    $row='';
    $sql = "SELECT * FROM cars ";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0)
    {?> <select name="ddl">
        <?php while($row = mysqli_fetch_assoc($result))
        { ?>
            <option value= <?php echo $row["name"];?>><?php echo $row["brand"];?> - <?php echo $row["name"];?></option><br><br>
        <?php }?>
        <?php }
        else
        {
            echo "0 results";
        }

        ?>
               
                </select>
              
                  <br><br>
            <div>

            <?php
            $row='';
            $sql = "SELECT * FROM color ";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0)
            {?> <select name="ddl2">
                <?php while($row = mysqli_fetch_assoc($result))
                { ?>
                    <option value= <?php echo $row["color"];?>><?php echo $row["color"];?></option><br><br>
                <?php }?>
                <?php }
                else
                {
                    echo "0 results";
                }
                ?>
            </select>

                <br><br>
        </div>
                <div>
            
            </select>
                    <br><br>
            <div>
                </div><button class="btn btn-primary" type="insert">send </button>
            </div>
        </form>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
 <div w3-include-html="footer.html"></div>
<script>
    w3IncludeHTML();
</script>
</html>