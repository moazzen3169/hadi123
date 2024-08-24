

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include"header.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>




<div class="dashboard-container">
    <div class="profile">
    
    <?php
// بررسی وجود جلسه قبلی
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// بررسی وجود کاربر وارد شده یا ثبت نام کرده است
if (isset($_SESSION['username'])) {
    $firstLetter = substr($_SESSION['username'], 0, 1);
    echo "<div class='proPHOTOE'>" . $firstLetter . "</div>";
}
?>
</div>
<div class="name">
<?php
// بررسی وجود جلسه قبلی
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// بررسی وجود کاربر وارد شده یا ثبت نام کرده است
if (isset($_SESSION['username'])) {
    
    echo "<div class='proPHOTOE'>" .$username  . "</div>";
   
// بررسی وجود جلسه قبلی
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include"config.php";    
// بررسی وجود کاربر وارد شده یا ثبت نام کرده است
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    

    // دریافت اطلاعات کاربر
    $sql = "SELECT number FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // نمایش اطلاعات کاربر
        $row = $result->fetch_assoc();
        $number = $row['number'];


        echo "<div class='proPHOTOE'> number: {$number} </div>";
    } else {
        echo "کاربری با نام کاربری '$username' یافت نشد.";
    }

    // بستن اتصال به دیتابیس
    $conn->close();
}

}
?>
</div>
    </div>    
</body>
</html>
