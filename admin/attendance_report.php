<?php
include_once("../includes/db_config.php"); // Include your // Query to retrieve attendance records

// $sql = "SELECT ar.student_id, at.st_class, ar.attendance_date, ar.status
//         FROM attendance_record ar
//         JOIN attendance_table at ON ar.student_id = at.st_id";

$sql = "SELECT ar.student_id, at.st_name, at.st_class, ar.attendance_date, ar.status
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

<?php include_once("../includes/index_header.php"); ?>
<style>
    #tableid {
        height: 450px;
        overflow: scroll;
    }
</style>

<body>
    <?php include_once("../includes/index_sidebar.php"); ?>

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Attendance Report Details</h3>
        </div>
        <!-- Breadcubs Area End Here -->

        <!-- Student Table Area Start Here -->
        <div class="card" id="tableid">
            <div class="card-body">
                <h2>Attendance Report</h2>
                <?php if (!empty($attendanceData)) { ?>

                    <table class="table table-striped bg-white">
    <thead>
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Class</th>
            <th>Attendance Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($attendanceData as $record) { ?>
            <tr>
                <td><?php echo $record["student_id"]; ?></td>
                <td><?php echo $record["st_name"]; ?></td> <!-- Display the student's name here -->
                <td><?php echo $record["st_class"]; ?></td>
                <td><?php echo $record["attendance_date"]; ?></td>
                <td><?php echo $record["status"]; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

                <?php } else { ?>
                    <p>No attendance records found.</p>
                <?php } ?>
            </div>
        </div>
        <!-- Student Table Area End Here -->

        <?php include_once("../includes/index_footer.php"); ?>
    </div>
</body>

</html>