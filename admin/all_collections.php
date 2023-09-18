<!-- ====  collection backup =========

<li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-cash-coin"></i><span>Accounts</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">

                            <a href="../admin/all_collections.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Collections</a>
                        </li>

                        <li class="nav-item">
                            <a href="../admin/all_expenses.php" class="nav-link"><i class="fas fa-angle-right"></i>Expenses</a>
                        </li>
                        <li class="nav-item">
                            <a href="../admin/add_collection.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Collections</a>
                        </li>

                        <li class="nav-item">
                            <a href="../admin/add_expenses.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Expenses</a>
                        </li>
                       
                    </ul>
                </li>
                
==== ===============                
 -->


<?php
include_once("../includes/db_config.php");
$sql = "SELECT * FROM student_fees_collection";
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
        <div class="breadcrumbs-area">
            <h3><a href="add_collection.php" class="">All Collection| Add Collection fees</a></h3>   
        </div>

        <!-- Cullection Table Area Start Here -->
        <div class="card" id="tableid">
            <div class="card-body">
                <h2>All Collections List</h2>     
                <table class="table table-striped bg-white">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Fee Type</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["st_id"]; ?></td>
                                <td><?php echo $row["st_name"]; ?></td>
                                <td><?php echo $row["class"]; ?></td>
                                <td><?php echo $row["expense_type"]; ?></td>
                                <td><?php echo $row["amount"]; ?></td>
                                <td><?php echo $row["status"]; ?></td>
                                <td><?php echo $row["date"]; ?></td>


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
