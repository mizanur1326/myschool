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
            <h3>Student Entry Form</h3>

        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add New Teacher Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Exam Schedule</h3>
                    </div>
                </div>
                <?php
                if (isset($_POST["submit"])) {
                    extract($_POST);
                    
                    require_once("../includes/db_config.php");

                    $sql = "INSERT INTO exam VALUES(NULL, '$exam_name', '$subject', '$class', '$date', '$time')";

                    $db->query($sql);

                    if ($db->affected_rows) {
                        echo "Info Successfully inserted";
                    }
                }
                ?>
                <form class="new-added-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="row">
                        <div class="col-xl-4 form-group">
                            <label>Exam_Name</label>
                            <input type="text" name="exam_name" placeholder="Enter Exam Name" class="form-control">
                        </div>
                        <div class="col-xl-4 form-group">
                            <label>Exam Subject</label>
                            <input type="text" name="subject" placeholder="Enter Exam Subject" class="form-control">
                        </div>
                        <div class="col-xl-4 form-group">
                            <label>Exam Class</label>
                            <input type="text" name="class" class="form-control" placeholder="Enter Class Name">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-4 form-group ml-4">
                            <label>Exam Date</label>
                            <input type="date" name="date" placeholder="Enter Exam Date" class="form-control">
                        </div>

                        <div class="col-xl-4 form-group ml-2">
                            <label> Exam Time</label>
                            <input type="number" name="time" placeholder="Enter Exam Time" class="form-control">
                        </div>
                     </div>

                    <div class="row mt-5">
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