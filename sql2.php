<!DOCTYPE html>

<html>

<head>

<title></title>

</head>

<body>

<p>Brand: <?= htmlspecialchars($_POST['brand']) ?></p>


<?php
        $brand = htmlspecialchars($_POST['brand'])
        $server = "localhost";
        $username = "php";
        $password = "hello";
        $database = "bubemedia";
        $conn = mysqli_connect($server, $username, $password, $database);

        // Check for successful connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "select hp from courses where brand='{$brand}';";
        $result = mysqli_query($conn, $sql);
    ?>

    <p>
        You selected brand: <?= $brand ?>.<br/>
        <?php
        mysqli_close($conn);
        ?>
    </p>

</body>

</html>