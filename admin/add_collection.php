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
                            <h3>Add Collections </h3>
                        </div>

                    </div>
<?php
if (isset($_POST["submit"])) {
    extract($_POST);
    require_once("../includes/db_config.php");

    $sql = "INSERT INTO student_fees_collection VALUES( NULL, '$st_id', '$st_name', '$class', '$fee_type', '$month', '$amount', '$paid', '$due' ,  '$status', '$date')";

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
                            <input type="text" name="st_id" placeholder="Enter student ID" class="form-control">
                        </div>

                        <div class="col-xl-3 form-group">
                            <label>Name</label>
                            <input type="text" name="st_name" placeholder="Enter student Name" class="form-control">
                        </div>


                        <div class="col-xl-2 form-group">
                                    <label>Class</label>
                                    <select class="select2 dropdown-item" name="class">
                                        <option value="" >Select Class</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                        </div>

                        <div class="col-xl-2 form-group">
                                    <label>Fee Type</label>
                                    <select class="select2 dropdown-item" name="fee_type">
                                        <option value="">Select one</option>
                                        <option value="Exam">Exam fee</option>
                                        <option value="Tution">Tution Fee</option>
              
                                    </select>
                        </div>

                        <div class="col-xl-2 form-group">
                                    <label>Month</label>
                                    <select class="select2 dropdown-item" name="month">
                                        <option value="">Select one</option>
                                        <option value="Jan">Jan</option>
                                        <option value="Feb">Feb</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="Aug">Aug</option>
                                        <option value="Sept">Sept</option>
                                        <option value="Oct">Oct</option>
                                        <option value="Nov">Nov</option>
                                        <option value="Dec">Dec</option>
              
                                    </select>
                        </div>

                       

                        
                        <div class="col-xl-3 form-group">
                            <label>Amount</label>
                            <input type="number" name="amount" class="form-control">
                        </div>

                        <div class="col-xl-2 form-group">
                            <label>Paid Amount</label>
                            <input type="number" name="paid" class="form-control">
                        </div>
                        <div class="col-xl-2 form-group">
                            <label>Due Amount</label>
                            <input type="number" name="due" class="form-control">
                        </div>


                        <div class="col-xl-2 form-group">
                                    <label>Status</label>
                                    <select class="select2 dropdown-item" name="status">
                                        <option value="" >Select one</option>
                                        <option value="paid">Paid</option>
                                        <option value="due">Due</option>
              
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