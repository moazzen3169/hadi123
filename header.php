<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="head-container">

   
        <div class="content">
        
       
    
    <script src="script.js"></script>

        <?php
    session_start();
    ?>

    <div class="content-container">
        <?php
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo "<a href='dashboard.php'><h2> داشبورد $username</h2></a>";
            ?>
        <a href="logout.php" class="exit">خروج</a>
            
            <?php
            
        }
        else{
            ?> 
        <a href="login.php" class="login">ورود/ثبت نام</a>
         <?php
        }
        ?>
    </div>

        <div class="logo"><a href="index.php"><img src="p1.png" alt="img" height="60px"></a></div>

        <div class="container">
        <button class="menu-button" onclick="toggleMenu()"></button>
        <div class="sidebar-menu" id="sidebarMenu">
        <a href="index.php"><img id="menu-logo" src="p1.png" alt="img" height="60px"></a>
            <ul>
                <li><a href="products.php">product</a></li>
                <li><a href="#">order</a></li>
                <li><a href="#">about</a></li>
            </ul>
        </div>

    </div>

    </div>
    </div>
</body>
</html>


<style>

body{
    padding:0px;
    margin:0px;
    
}
.head-container{
    width:100%;
    height:80px;
    background-color: #313131;
    position: fixed;
    top:0px;
    
}
.logo{
    position: absolute;
    top:18px;
    right:30px;
}


    .content-container h2 {
color: #fff;
font-family: morabba thin;
font-size:20px;
font-weight: 10;
position: absolute;
top: 10px;
left:130px;
}

#menu-logo{
    position:fixed;
    top:20px;
    left:40px;
}


/* لینک‌های خروج و داشبورد به لایه پایین صفحه منتقل شوند */
a.logout-link, a.dashboard-link {
    position: fixed;
    bottom: 10px; /* فاصله از پایین صفحه */
    right: 10px; /* فاصله از سمت راست صفحه */
    z-index: 0; /* قرار دادن لینک‌ها در بالای سایر المان‌ها */
}



.container {
    display: flex;
}

.sidebar-menu {
    position: absolute;
    width: 250px;
    height: 100vh;
    background-color: #333;
    color: white;
    transition: transform 0.3s ease;
    transform: translateX(-250px);
    position: fixed;
    top: 0;
    left: 0;
}

.sidebar-menu ul {
    list-style: none;
    padding: 0;
    margin-top:80px;


}

.sidebar-menu ul li {
    padding:10px 100px;
    margin-top:2px;
    background-color: #313131;
    text-align:center;

    
}
.sidebar-menu ul li a{
    text-decoration:none;
    color: white;
    font-family: morabba;
    padding:10px 120px 10px 120px;
    text-align:center;
    margin-left:-130px;
}

.menu-button {
        background-image: url('menu.png');
        background-size: cover;
        width: 40px;
        height: 40px;
        cursor: pointer;
        background-color:#ffffff00 ;
         border: none;
         position:fixed;
         top:18px;
         left:20px;
}

.content {
    flex: 1;
    padding: 20px;
}


.exit{
    text-decoration: none;
    color: rgb(255, 0, 0);
    font-family: morabba;
    font-size: 20px;
    position: absolute;
    top: 24px;
    left: 70px;
    border-right: 1px red solid;
    padding:  1px 10px;
}
.login{
    text-decoration: none;
    color: rgb(255, 255, 255);
    font-family: morabba;
    position: absolute;
    top: 27px;
    left: 70px;
}





</style>

