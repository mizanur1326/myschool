<?php include_once("../includes/db_config.php");
$sql = "SELECT * FROM attendance_table";
$result = $db->query($sql);
?>
<?php include_once("../includes/index_header.php"); ?>

<?php include_once("../includes/index_sidebar.php") ?>
<style>
    #tableid {
        height: 450px;
        overflow: scroll;
    }
    .attendance-radio {
        padding: 20px;
    }
</style>

<body>

    <?php include_once("../includes/index_sidebar.php") ?>

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="mt-5 mb-0">

            <div class="card" id="tableid">
                <div class="card-body">
                    <h2>Take Attendance</h2>
                    <form method="post" action="process_attendance.php">
                        <table class="table table-striped bg-white">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Student Class</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $row["st_id"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["st_name"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["st_class"] ?>
                                        </td>
                                        <td>
                                            <input type="radio" class="attendance-radio" name="attendance[<?php echo $row["st_id"]; ?>]" value="Present"> Present
                                            <input type="radio" class="attendance-radio" name="attendance[<?php echo $row["st_id"]; ?>]" value="Absent"> Absent
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Submit Attendance</button>
                    </form>
                </div>

            </div>
        </div>

        <?php include_once("../includes/index_footer.php") ?>