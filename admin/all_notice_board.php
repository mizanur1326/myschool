<?php
include_once("../includes/db_config.php"); // Include your database configuration file here

// SQL query to retrieve all student data
$sql = "SELECT * FROM notice";

// Execute the query
$result = $db->query($sql);
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
            <h3><a href="notice_entry.php" class="">Notice Form | Add New Notice</a></h3>   
            

            <!-- delete message  -->
            
            <?php   if (isset( $_SESSION['delete_msg'] ) ){
                $delete_msg  =  $_SESSION['delete_msg'];
                ?>
            <div class="alert alert-danger p-5 fw-bold" id="welcome-alert" role="alert">
                <?php echo $delete_msg?>
            </div>
        <?php unset ( $_SESSION['delete_msg'] );   } ?>
 

        </div>
        <!-- Breadcubs Area End Here -->

        <!-- Student Table Area Start Here -->
        <div class="card" id="tableid">
            <div class="card-body">
                <h2>All Notice List</h2>     
                <table class="table table-striped bg-white">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Notice Date</th>
                            <th>Posted By</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["title"]; ?></td>
                                <td><?php echo $row["dob"]; ?></td>
                                <td><?php echo $row["posted_by"]; ?></td>
                                <td><?php echo $row["details"]; ?></td>
                          <td>
                         <a href="notice_delete.php?id=<?php echo $row["id"] ?>"><i class="fa-solid fa-trash"></i></a>
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
