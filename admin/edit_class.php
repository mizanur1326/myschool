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
            <h3>Class Info Edit Form</h3>

        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add New Teacher Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Edit Class Info</h3>
                    </div>
                </div>
                <?php
                require_once("../includes/db_config.php");
                $id = $_REQUEST["id"];

                if (isset($_POST["update"])) {
                    extract($_POST);

                    $sql = "UPDATE class SET  name = '$name', c_teacher = '$c_teacher'  WHERE c_id = '$id' ";

                    $db->query($sql);

                    if ($db->affected_rows) {
                        echo "Info Successfully Updated";
                    }
                }

                $result = $db->query("SELECT * FROM class WHERE c_id = '$id' ");
                $row = $result->fetch_assoc();
                ?>

                <form class="new-added-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="row">
                        <div class="col-xl-4 form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo $row["name"] ?>" placeholder="Enter Class" class="form-control">
                        </div>


                        <div class="col-xl-4 form-group">
                            <label>Class Teacher</label>
                            <input type="text" name="c_teacher" value="<?php echo $row["c_teacher"] ?>" placeholder="Enter Class Teacher" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" name="update"
                                class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>

                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                            <input type="hidden" value="<?php echo $row["c_id"] ?>" name="id">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add New Teacher Area End Here -->
    <?php include_once("../includes/index_footer.php"); ?>
</div>
