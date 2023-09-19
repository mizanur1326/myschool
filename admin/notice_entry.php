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
            <h3>Add Notice</h3>

        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add New Teacher Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Notice</h3>
                    </div>
                </div>
                <?php
                 require_once("../includes/db_config.php");
                if (isset($_POST["submit"])) {
                    extract($_POST);
                $sql = "INSERT INTO notice VALUES(NULL, '$title', '$dob', '$upload', '$address')";

                    $db->query($sql);

                    if ($db->affected_rows) {
                        echo "Info Successfully inserted";
                    }
                }
                ?>
                <!-- =====start From==== -->
                <form class="new-added-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="row">
                        <div class="col-xl-3 form-group">
                            <label>Title</label>
                            <input type="text" name="title" placeholder="Enter Your Notice Title" class="form-control">
                        </div>
                         <div class="col-xl-3 form-group">
                            <label> Notice Date</label>
                            <input type="date" name="dob" class="form-control">
                        </div>
                        <div class="col-xl-3 form-group">
                            <label>Posted By</label>
                            <input type="text" name="upload" class="form-control" placeholder="Notice Posted By">
                           
                        </div><br>
                        <div class="col-xl-3 form-group" >
                            <label>Detailes</label>
                            <textarea name="address" id="" cols="20" rows="10"  class="form-control"></textarea>
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