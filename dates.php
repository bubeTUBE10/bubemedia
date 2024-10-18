<!DOCTYPE html>

<html>

<head>
        <title>SQL test</title>
        <?php
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

</p>
<form action="sql.php" method="get">
  <label for="year">year:</label><br />
  <select id="year" name="year">
                <?php
                    foreach($result as $row) 
                    {
                        echo "<option value='{$row['year']}'>{$row['year']}</option>\n";
                    }
                    // Don't forget to close the connection!
                    mysqli_close($conn);
                ?>
            </select>
  <input type="submit" value="Submit">
</form>
<p>
</html>