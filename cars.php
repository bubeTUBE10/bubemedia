<!DOCTYPE html>

<html>

<head>
        <title>SQL test</title>
        <?php
            $server = "localhost";
            $username = "php";
            $password = "php_password";
            $database = "testdb";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select * from courses;";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>

</p>
<form action="sql2.php" method="get">
  <label for="brand">brand:</label><br />
  <select id="courses" name="courses">
                <?php
                    foreach($result as $row) 
                    {
                        echo "<option value='{$row['brand']}'>{$row['brand']}</option>\n";
                    }
                    // Don't forget to close the connection!
                    mysqli_close($conn);
                ?>
            </select>
  <input type="submit" value="Submit">
</form>
<p>
</html>