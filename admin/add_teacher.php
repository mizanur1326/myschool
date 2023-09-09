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
            <h3>Teacher Entry Form</h3>

        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add New Teacher Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Teacher</h3>
                    </div>
                </div>
                <?php
                if (isset($_POST["submit"])) {
                    extract($_POST);
                    require_once("../includes/db_config.php");

                    $sql = "INSERT INTO teachers VALUES(NULL, '$name', '$gender', '$address', '$phone', '$email', '')";

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
                            <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                        </div>

                        <div class="col-xl-4 form-group">
                            <label>Gender</label>
                            <!-- <select class="dropdown-item" name="gender">
                                        <option value="">Please Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select> -->

                            <div class="input-group m-3">

                                <label class="form-check-label m-2">Male</label>
                                <input type="radio" name="gender" value="Male">
                                <label class="form-check-label m-2">Female</label>
                                <input type="radio" name="gender" value="Female">

                            </div>
                        </div>


                        <div class="col-xl-4 form-group">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter Your Address" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" placeholder="Enter Your Phone" class="form-control">
                        </div>

                        <div class="col-xl-4 form-group">
                            <label>E-Mail</label>
                            <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
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