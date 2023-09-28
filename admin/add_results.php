<?php include_once("../includes/index_header.php"); ?>


<!-- Header Menu Area End Here -->
<!-- Page Area Start Here -->
<div class="dashboard-page-one">
    <!-- Sidebar Area Start Here -->
    <?php include_once("../includes/index_sidebar.php"); ?>
    <!-- Sidebar Area End Here -->
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Result Entry Form</h3>

        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add New Teacher Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add Result</h3>
                    </div>
                </div>
                <?php
                if (isset($_POST["submit"])) {
                    extract($_POST);
                    require_once("../includes/db_config.php");
                    $sql = "INSERT INTO result VALUES(NULL, $st_id ,'$name', '$class', '$exam_name', '$marks')";

                    $db->query($sql);

                    if ($db->affected_rows) {
                        echo "Info Successfully inserted";
                    }
                }
                ?>
                <form class="new-added-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="row">
                        <div class="col-xl-4 form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter Students Name" class="form-control">
                        </div>
                        <div class="col-xl-2 form-group">
                            <label>Student ID</label>
                            <input type="number" name="st_id" placeholder="Enter Students ID" class="form-control">
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

                        <div class="col-xl-3 form-group">
                        <label>Exam Type</label>
                                    <select class="select2 dropdown-item" name="exam_name">
                                        <option value="" >Select Exam</option>
                                        <option> Mid-Term </option>
                                        <option> Final </option>
                                    </select>
                        </div>

                        
                        <div class="col-xl-3 form-group">
                            <label>Marks</label>
                            <input type="number" name="marks" class="form-control">
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
        <!-- Add New Teacher Area End Here -->
        <?php include_once("../includes/index_footer.php"); ?>
    </div>
</div>