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



            ?>