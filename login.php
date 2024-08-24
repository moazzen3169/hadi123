<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login / signup</title>
    <link rel="stylesheet" href="style.css">
    <?php 
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
    ?>
</head>
<body>
    <div class="login-container">
        <div class="form">
            <form method="post" action="login.php">
                <input type="text" name="username" id="username">
                <input type="password" name="password" id="password">
                <input type="submit" value="login" id="submit">
                <a id="signup-link" href="singup.php">you don't have an account? signup</a>
            </form>

            <?php
            session_start();
            include"config.php";
            // دریافت مقادیر ارسال شده از فرم
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = $_POST['password'];

                // جستجوی کاربر در دیتابیس
                $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
                $result = $conn->query($sql);

                // نمایش نتیجه
                if ($result->num_rows > 0) {
                    $_SESSION['username'] = $username;
                    header("Location: index.php");
                    exit(); // اطمینان حاصل شود که بلافاصله بعد از header()، هیچکد دیگری اجرا نشود
                } else {
                    echo "<p>Login failed. Invalid username or password.</p>";
                }
            }

            // بستن اتصال به دیتابیس
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>


<style>



.login-container{
    display: flex;
    align-items: center;
    justify-content: center;

}
.form{
    background-color: #313131;
    width: 300px;
    height: 400px;
    margin-top: 150px;
    border-radius: 5px;
    border-bottom: 10px solid #212121;

}
.form form{
    display: grid;
    align-items: center;
    justify-content: center;
    margin-top: 110px;
    
}

.form form input{
    width: 250px;
    height: 30px;
    margin-top: 10px;
    border: none;
    border-radius: 3px;

}



#signup-link{
    color: #fff;
    text-decoration: none;
    margin-top: 20px;
    text-align: center;
    font-family: morabba ;
    font-weight: 10;
    transition: 0.3s ease;

}

#signup-link:hover{
    color: #212121;
}

#submit{
    width: 255px;
    cursor: pointer;
    color:#fff;
    background-color: #212121;
    transition: 0.3s ease;

}
#submit:hover{
    color: #fff;
    background-color: #313131;
    font-family: morabba;
}





</style>