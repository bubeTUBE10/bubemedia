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

    <?php
        foreach ($result as $row) // There should only be one row returned
        {
            echo "{$row['brand']} {$row['make']} has {$row['hp']} horsepower.";
        }
        // Don't forget to close the connection!
        mysqli_close($conn);
    ?>

    </body>
</html>