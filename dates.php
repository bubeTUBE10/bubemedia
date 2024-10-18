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
  <select id="month" name="month" onchange="fetchDays()">
    <option value="">Select Month</option>
    <!-- Months will be populated dynamically based on the selected year -->
  </select><br />


  <input type="submit" value="Submit">
</form>

<script>
    function fetchMonths() {
    var year = 2024;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "get_months.php?year=" + year, true);
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        document.getElementById("month").innerHTML = xhr.responseText;
        document.getElementById("day").innerHTML = "<option value=''>Select Day</option>"; // Reset days when year is changed
      }
    };
    xhr.send();
  }
</script>

<p>
</html>