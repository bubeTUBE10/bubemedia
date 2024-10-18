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

  <label for="month">Month:</label><br />
  <select id="month" name="month" onchange="fetchMonths()">
    <option value="">Select Month</option>
    <?php
      foreach($result as $row) {
        echo "<option value='{$row['month']}'>{$row['month']}</option>\n";
      }
    ?>
  </select><br />


  <input type="submit" value="Submit">
</form>

<script>
</script>

<p>
</html>