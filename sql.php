<!DOCTYPE html>
<html>
    <head>
        <title>SQL test</title>
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
    </head>
    <body>
        You selected brand: <?= $brand ?>.<br/>
        <?php
      //  foreach ($result as $row) // There should only be one row returned
      //  {
     //       echo "{$row['brand']} has {$row['hp']} horsepower.";
       // }
        // Don't forget to close the connection!
        foreach($result as $row) { echo "id: {$row["id"]} | Car: {$row["brand"]} {$row["make"]}\n"; }
        mysqli_close($conn);
        ?>
    </body>
</html>