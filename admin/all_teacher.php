<?php include_once("../includes/db_config.php");
$sql = "SELECT * FROM teachers";
$result = $db->query($sql);
?>
<?php include_once("../includes/index_header.php"); ?>

<?php include_once("../includes/index_sidebar.php") ?>
<style>
    #tableid {
        height: 450px;
        overflow: scroll;
    }
</style>

<body>
    <div class="dashboard-content-one">

        <div class="m-5">
            <a href="add_teacher.php" class="btn btn-primary btn-lg">Add New Teacher</a>
        </div>

        <!-- Teacher Table Area Start Here -->

        <div class="card" id="tableid">
            <div class="card-body">
                <h2>All Teachers List</h2>
                <table class="table table-striped bg-white">
                    <thead>
                        <tr>
                            <th>Teacher ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td>
                                    <?php echo $row["t_id"] ?>
                                </td>
                                <td>
                                    <?php echo $row["name"] ?>
                                </td>
                                <td>
                                    <?php echo $row["gender"] ?>
                                </td>
                                <td>
                                    <?php echo $row["address"] ?>
                                </td>
                                <td>
                                    <?php echo $row["phone"] ?>
                                </td>
                                <td>
                                    <?php echo $row["email"] ?>
                                </td>
                                <td>
                                    <a href="edit_teacher.php?id=<?php echo $row["t_id"] ?>" class="eud">Edit ||</a>
                                    <a href="delete_teacher.php?id=<?php echo $row["t_id"] ?>" class="eud">Delete</a>
                                </td>

                            </tr>
                        <?php }
                        ; ?>


                    </tbody>
                </table>
            </div>

        </div>
        <?php include_once("../includes/index_footer.php") ?>

        <!-- Teacher Table Area End Here -->