<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="../assets/fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Modernize js -->
    <script src="../assets/js/modernizr-3.6.0.min.js"></script>
    <!-- jquery cdn  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

</body>

</html>
<?php include("../includes/db_config.php"); ?>


<!-- Breadcubs Area Start Here -->
<div class="">
    <h3>Attendance Sheet by Class</h3>
</div>

<?php
$id = $_POST["id"];
$sql = "SELECT * FROM student_class_view WHERE s_class = '$id'";
$result = $db->query($sql);
//$row = $result->fetch_assoc();
?>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <th>Student Class</th>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Status</th>
            </thead>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $row["s_class"] ?>
                        </td>
                        <td>
                            <?php echo $row["s_id"] ?>
                        </td>
                        <td>
                            <?php echo $row["student_name"] ?>
                        </td>
                        <td>
                            <!-- <label class="form-check-label m-2">Present</label>
                            <input type="checkbox" name="check" value="Present">
                            <label class="form-check-label m-2">Absent</label>
                            <input type="checkbox" name="check" value="Absent"> -->
                            <select class="form-control" name="check_AP">
                                <option>Present</option>
                                <option>Absent</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            <?php }
            ; ?>
        </table>
        <button type="submit" name="submit" class="btn btn-primary btn-lg">Save Attendance</button>
    </div>
</div>




<?php include_once("../includes/index_footer.php"); ?>