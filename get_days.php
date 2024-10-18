<?php
// Database connection
include('db_connection.php');

$year = isset($_GET['year']) ? intval($_GET['year']) : 0;
$month = isset($_GET['month']) ? intval($_GET['month']) : 0;

if ($year && $month) {
    // Calculate the number of days in the given month and year
    $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    
    // Generate the day options
    for ($day = 1; $day <= $days_in_month; $day++) {
        echo "<option value='{$day}'>{$day}</option>\n";
    }
}
?>