<!DOCTYPE html>
<html>

<head>
        <title>SQL test</title>
        <?php
            $day = htmlspecialchars($_GET["day"]);
            $month = htmlspecialchars($_GET["month"]);
            $year = htmlspecialchars($_GET["year"]);
            $server = "localhost";
            $username = "php";
            $password = "hello";
            $database = "bubemedia";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "INSERT INTO taken_times (year, month, day) VALUES ($year, $month, $day);";
            $result = mysqli_query($conn, $sql);
        ?>
</head>

    <body>
    You selected day <?= $day ?>.<br/>

    <?php
        echo $result ? "Success!" : "Failure: {mysqli_error($conn)}";
        // Don't forget to close the connection!
        mysqli_close($conn);
    ?>

    </body>
</html>