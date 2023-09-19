<?php
include_once("../includes/db_config.php"); // Include your database configuration file here

// SQL query to retrieve all student data
$sql = "SELECT * FROM exam";

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
            <h3><a href="notice_entry.php" class="">Exam Schedule Form | Add New Schedule</a></h3>   
            

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
                <h2>All Exam Schedule </h2>     
                <table class="table table-striped bg-white">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Exam Name</th>
                            <th>Subject</th>
                            <th>Class</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_object()) { ?>
                            <tr>
                                <td><?php echo $row->id ?></td>
                                <td><?php echo $row->exam_name ?></td>
                                <td><?php echo $row->subject ?></td>
                                <td><?php echo $row->class ?></td>
                                <td><?php echo $row->date ?></td>
                                <td><?php echo $row->time ?></td>
                          <td>
                         <a href="exam_delete_schedule.php?id=<?php echo $row-> id?>"><i class="fa-solid fa-trash"></i></a>
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
