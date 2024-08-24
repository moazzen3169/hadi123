<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">

        <?php
        // اتصال به دیتابیس
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pod";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // بررسی اتصال
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        // ثبت نام کاربر
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup-username"]) && isset($_POST["signup-password"]) && isset($_POST["number"])) {
            $username = $_POST["signup-username"];
            $password = $_POST["signup-password"];
            $number = $_POST["number"];

            // درج اطلاعات کاربر در دیتابیس
            $stmt = $conn->prepare("INSERT INTO user (username, password , number) VALUES (?, ? ,?)");
            $stmt->bind_param("ssi", $username, $password ,$number);
            
            if ($stmt->execute()) {
                session_start();
                $_SESSION['username'] = $username;
                echo "<p>Registration successful. Please wait...</p>";
                echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 1000);</script>";
            } else {
                echo "<p>Error: " . $stmt->error . "</p>";
            }
            
            $stmt->close();
        }
        ?>


    
<div class="form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
            <input type="text" name="signup-username" placeholder="Username" id="username" required>
            <input type="password" name="signup-password" placeholder="Password" id="password" required>
            <input type="number" name="number" placeholder="number" id="number  " required>
            <input id="submit" type="submit" value="Sign Up"></input>
            <a id="signup-link" href="login.php">You have an account? Login</a>

        </form>
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