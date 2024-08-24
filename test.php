<!DOCTYPE html>
<html lang="fa">
<head>
<meta charset="UTF-8">
<?php include"header.php";?>
<title>محصولات</title>
<style>

    .product-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 0px;
        margin-top:80px;
    }

    .product {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
        
    }

    .product img {
        max-width: 100%;
    }

    .product-description {
        margin-top: 10px;
    }
    .product .hr{
        width:100%;
        margin:0px;
        border: 1px solid #ccc;

    }
</style>
</head>
<body>
    <div class="body-container">

<div class="product-container">
    <?php
    include "config.php";

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product'>";
            echo "<img src='" . $row['proIMG'] . "' alt='" . $row['proNAME'] . "'>";
            echo "<hr>";
            echo "<div class='product-description'>";
            echo "<h3>" . $row['proNAME'] . "</h3>";
            echo "<p>" . $row['proPRICE'] . "</p>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "محصولی یافت نشد.";
    }

    $conn->close();
    ?>
</div>

</body>
</html>