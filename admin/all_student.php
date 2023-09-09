<?php
include_once("../includes/db_config.php"); // Include your database configuration file here

// SQL query to retrieve all student data
$sql = "SELECT * FROM students";

// Execute the query
$result = $db->query($sql);
?>

<?php include_once("../includes/index_header.php"); ?>

<body>
    <?php include_once("../includes/index_sidebar.php"); ?>

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3><a href="add_student.php" class="">Admission Form | Add New Student</a></h3>
        </div>
        <!-- Breadcubs Area End Here -->

        <!-- Student Table Area Start Here -->
        <div class="card" id="tableid">
            <div class="card-body">
                <h2>All Students List</h2>
                <table class="table table-striped bg-white">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>E-Mail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["s_id"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["class"]; ?></td>
                                <td><?php echo $row["gender"]; ?></td>
                                <td><?php echo $row["dob"]; ?></td>
                                <td><?php echo $row["address"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td>
                                    <a href="edit_student.php?id=<?php echo $row["s_id"] ?>" >Edit ||</a>
                                    <a href="delete_student.php?id=<?php echo $row["s_id"] ?>" >Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Student Table Area End Here -->

        <?php include_once("../includes/index_footer.php"); ?>
    </div>
</body>

</html>
