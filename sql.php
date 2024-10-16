<!DOCTYPE html>
<html>

<head>
        <title>SQL test</title>
        <?php
            $brand = htmlspecialchars($_GET["brand"]);
            $server = "localhost";
            $username = "php";
            $password = "hello";
            $database = "bubemedia";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select * from cars;";
            $result = mysqli_query($conn, $sql);
        ?>
</head>

    <body>
    You selected brand <?= $brand ?>.<br/>
    </body>
</html>