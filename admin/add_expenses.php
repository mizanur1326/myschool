<?php include_once("../includes/index_header.php"); ?>

<?php include_once("../includes/index_sidebar.php") ?>
<style>
    #tableid {
        height: 450px;
        overflow: scroll;
    }

    #PA {
        height: 30px;
        font-size: 15px;
    }
</style>

<body>

    <?php include_once("../includes/index_sidebar.php") ?>

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="mt-5 mb-0">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Add Expenses </h3>
                        </div>

                    </div>
<?php
if (isset($_POST["submit"])) {
    extract($_POST);
    require_once("../includes/db_config.php");

    $sql = "INSERT INTO expenses VALUES( NULL, '$id', '$name', '$expense_type', '$amount', '$status', '$date')";

    $db->query($sql);

    if ($db->affected_rows) {
        echo "Info Successfully inserted";
    }
}
?>
                    <form class="new-added-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="row">
                        <div class="col-xl-2 form-group">
                            <label>ID</label>
                            <input type="text" name="id" placeholder="Enter ID" class="form-control">
                        </div>

                        <div class="col-xl-2 form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter Name" class="form-control">
                        </div>

                        <div class="col-xl-2 form-group">
                                    <label>Fee Type</label>
                                    <select class="select2 dropdown-item" name="expense_type">
                                        <option value="">Select one</option>
                                        <option >Salary</option>
                                        <option >Others</option>
              
                                    </select>
                        </div>

                       

                        
                        <div class="col-xl-3 form-group">
                            <label>Amount</label>
                            <input type="number" name="amount" class="form-control">
                        </div>

                        <div class="col-xl-2 form-group">
                                    <label>Status</label>
                                    <select class="select2 dropdown-item" name="status">
                                        <option value="" >Select one</option>
                                        <option value="paid">Paid</option>
                                        <option value="unpaid">Unpaid</option>
              
                                    </select>
                        </div>

                        <div class="col-xl-3 form-group">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" name="submit"
                                class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>




        <?php include_once("../includes/index_footer.php") ?>