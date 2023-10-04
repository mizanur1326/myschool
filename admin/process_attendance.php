<?php
// Include your database configuration file and perform any necessary database connections here
include_once("../includes/db_config.php");

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the attendance data
    if (isset($_POST["attendance"]) && is_array($_POST["attendance"])) {
        foreach ($_POST["attendance"] as $studentID => $status) {
            // Insert attendance record into the attendance_record table
            $attendanceDate = date('Y-m-d'); // Use the current date
            $insertSQL = "INSERT INTO attendance_record (student_id, attendance_date, status) VALUES (?, ?, ?)";
            $stmt = $db->prepare($insertSQL);
            $stmt->bind_param("iss", $studentID, $attendanceDate, $status);
            $stmt->execute();
            $stmt->close();
        }

        // Attendance has been successfully recorded
        $message = "Attendance has been successfully recorded."; 
        header("Location:attendance_report.php");
    } else {
        // No attendance data received
        $message = "No attendance data received. Please make sure to select attendance for students.";
    }
} else {
    // The form has not been submitted
    $message = "Please use the attendance form to submit attendance data.";
}

// Close the database connection if necessary

// Output the message to the user
?>
