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
                require_once("../includes/db_config.php");
                $id = $_GET['id'];


                $sql = " SELECT * FROM result WHERE id = '$id' ";
                $result = $db->query($sql);
                $data = $result->fetch_assoc();


                if (isset($_POST['update'])) {
                    extract($_POST);
                    $sql = "UPDATE result SET st_id = '$st_id', st_name = '$name', st_class = '$class', exam_name = '$exam_name', marks = '$marks', result = '$result' WHERE id = '$id'";
                }
                ?>




                <form class="new-added-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                <input  value=" <?php echo $data['id']  ?> " type="hidden" name="input_id" disabled >

                    <div class="row">
                        <div class="col-xl-4 form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter Students Name" class="form-control"
                            value="<?php echo $data['st_name'] ?>"
                            >
                        </div>
                        <div class="col-xl-2 form-group">
                            <label>Student ID</label>
                            <input type="number" name="st_id" placeholder="Enter Students ID" class="form-control"
                            value="<?php echo $data['st_id'] ?>"
                            >
                        </div>


                        <div class="col-xl-2 form-group">
                            <label>Class</label>
                            <select class="select2 dropdown-item" name="class">
                                <option value="">Select Class</option>
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
                                <option value="">Select Exam</option>
                                <option> Mid-Term </option>
                                <option> Final </option>
                            </select>
                        </div>


                        <div class="col-xl-3 form-group">
                            <label>Marks</label>
                            <input type="number" name="marks" class="form-control"
                            value="<?php echo $data['marks'] ?>"
                            >
                        </div>

                        <div class="col-xl-3 form-group">

                            <label>Result</label>
                            <select class="select2 dropdown-item" name="result">
                                <option value="">Select Result</option>
                                <option value="pass"> Pass </option>
                                <option value="fail"> Fail </option>
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" name="update" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>

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