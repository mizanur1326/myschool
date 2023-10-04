<?php
// Include your database configuration file located in the "../includes/" directory
include_once("../includes/db_config.php");

// Query to retrieve attendance records

$sql = "SELECT ar.student_id, at.st_class, ar.attendance_date, ar.status
        FROM attendance_record ar
        JOIN attendance_table at ON ar.student_id = at.st_id";


$result = $db->query($sql);

// Check if there are any attendance records
if ($result->num_rows > 0) {
    // Initialize an array to store attendance data
    $attendanceData = array();
    
    while ($row = $result->fetch_assoc()) {
        $attendanceData[] = $row;
    }
} else {
    $attendanceData = array();
}

// Close the database connection if necessary
$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Report</title>
    <!-- Add your CSS styles here if needed -->
</head>
<body>
    <h1>Attendance Report</h1>

    <?php if (!empty($attendanceData)) { ?>
        <table>
    <thead>
        <tr>
            <th>Student ID</th>
            <th>Student Class</th>
            <th>Attendance Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($attendanceData as $record) { ?>
            <tr>
                <td><?php echo $record["student_id"]; ?></td>
                <td><?php echo $record["st_class"]; ?></td> <!-- Display the student class here -->
                <td><?php echo $record["attendance_date"]; ?></td>
                <td><?php echo $record["status"]; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

    <?php } else { ?>
        <p>No attendance records found.</p>
    <?php } ?>

    <!-- Add any additional content or links here if needed -->
</body>
</html>