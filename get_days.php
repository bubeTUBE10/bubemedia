<?php
// Database connection
include('db_connection.php'); // Adjust as necessary

$month = isset($_GET['month']) ? intval($_GET['month']) : 0;

if ($month) {
    // Query to get days for the selected month
    $query = "SELECT DISTINCT day FROM date_times WHERE month = $month ORDER BY day";
    $result = mysqli_query($conn, $query);
    
    // Create the month options
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<option value='{$row['day']}'>{$row['day']}</option>\n";
        }
    } else {
        echo "<option value=''>No days available</option>\n";
    }
    
    // Close connection
    mysqli_close($conn);
}
?>