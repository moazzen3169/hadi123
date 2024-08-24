<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="style.css">
    <?php include"header.php"; ?>
</head>
<body>
    <div class="index-container">
    


    <?php
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            ?>
                <img src="e2.jpg" alt="" width="100%" height="100%" >
            <?php
        }
        else{
        ?>
        <h3 id="matn">برای استفاده از سایت ابتدا وارد حساب کاربریتون بشید</h3>
        <?php
        }
        ?>




    </div>
</body>
</html>