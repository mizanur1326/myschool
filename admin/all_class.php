<?php
include_once("../includes/db_config.php"); // Include your database configuration file here

// SQL query to retrieve all student data
$sql = "SELECT * FROM class";

// Execute the query
$result = $db->query($sql);
?>

<?php include_once("../includes/index_header.php"); ?>

<body>
    <?php include_once("../includes/index_sidebar.php"); ?>

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3><a href="add_class.php" class="">Add New Class</a></h3>
        </div>
        <!-- Breadcubs Area End Here -->

        <!-- Student Table Area Start Here -->
        <div class="card" id="tableid">
            <div class="card-body">
                <h2>All Class List</h2>
                <table class="table table-striped bg-white">
                    <thead>
                        <tr>

                            <th>Class Name</th>
                            <th>Class Teacher</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["c_teacher"]; ?></td>
                                <td>
                                    <a href="edit_class.php?id=<?php echo $row["c_id"] ?>" >Edit ||</a>
                                    <a href="delete_class.php?id=<?php echo $row["c_id"] ?>" >Delete</a>
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
