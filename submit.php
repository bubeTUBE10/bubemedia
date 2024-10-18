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
            $sql = "INSERT INTO taken_times (year, month, day) VALUES ($year, $month, $day)";
        ?>
</head>

    <body>
    You selected day <?= $day ?>.<br/>

    <?php
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    ?>

    </body>
</html>