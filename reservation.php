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
            $sql = "select * from date_times;";
            $result = mysqli_query($conn, $sql);
        ?>
</head>

    <body>
    You selected day <?= $day ?>.<br/>

    <?php
        foreach ($result as $row) // There should only be one row returned
        {
            if ($row['day'] == $day) {
                echo "{$row['year']} {$row['month']} {$row['day']}";
                break; // Stop the loop once the specific row is found
            }
        }
        // Don't forget to close the connection!SS
        mysqli_close($conn);
    ?>

    </body>
</html>