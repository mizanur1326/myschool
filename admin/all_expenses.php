<?php
include_once("../includes/db_config.php");
$sql = "SELECT * FROM expenses";
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
            <h3><a href="add_collection.php" class="">All Expenses | Add Expenses </a></h3>   
        </div>

        <!-- Expense Table Area Start Here -->
        <div class="card" id="tableid">
            <div class="card-body">
                <h2>All Expenses List</h2>     
                <table class="table table-striped bg-white">
                    <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Expense Type</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                            
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["te_name"]; ?></td>
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
