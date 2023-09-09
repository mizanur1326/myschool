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
            <h3>Teacher Info Edit Form</h3>

        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add New Teacher Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Edit Teachers Info</h3>
                    </div>
                </div>
                <?php
                require_once("../includes/db_config.php");
                $id = $_REQUEST['id'];

                if (isset($_POST["update"])) {
                    extract($_POST);
                    $password = $_POST["password"];
                    $password = sha1($password);

                    //echo "UPDATE teachers SET name = '$name', gender = '$gender', address = '$address', phone = '$phone', email = '$email' WHERE t_id = '$id' ";
                
                    $sql = "UPDATE teachers SET name = '$name', gender = '$gender', address = '$address', phone = '$phone', email = '$email', password = '$password' WHERE t_id = '$id' ";

                    $db->query($sql);

                    if ($db->affected_rows) {
                        echo "Info Successfully Updated";
                    }
                }

                $result = $db->query("SELECT * FROM teachers WHERE t_id='$id'");
                $row = $result->fetch_assoc();
                ?>
                <form class="new-added-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="row">
                        <div class="col-xl-4 form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter Your Name" class="form-control"
                                value="<?php echo $row["name"] ?>">
                        </div>

                        <div class="col-xl-4 form-group">
                            <label>Gender</label>
                            <div class="input-group m-3">
                                <label class="form-check-label m-2">Male</label>
                                <input type="radio" name="gender" value="Male" <?php echo ($row["gender"] == "Male") ? "checked" : ""; ?>>
                                <label class="form-check-label m-2">Female</label>
                                <input type="radio" name="gender" value="Female" <?php echo ($row["gender"] == "Female") ? "checked" : ""; ?>>
                            </div>
                        </div>


                        <div class="col-xl-4 form-group">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter Your Address" class="form-control"
                                value="<?php echo $row["address"] ?>">
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-xl-4 form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" placeholder="Enter Your Phone" class="form-control"
                                value="<?php echo $row["phone"] ?>">
                        </div>

                        <div class="col-xl-4 form-group">
                            <label>E-Mail</label>
                            <input type="email" name="email" placeholder="Enter Your Email" class="form-control"
                                value="<?php echo $row["email"] ?>">
                        </div>

                        <div class="col-xl-4 form-group">
                            <label>Change Password</label>
                            <input type="password" name="password" placeholder="Default password is 123"
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" name="update"
                            class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        <input type="hidden" value="<?php echo $row["t_id"] ?>" name="id">
                    </div>

                </form>
            </div>
        </div>
        <!-- Add New Teacher Area End Here -->
        <?php include_once("../includes/index_footer.php"); ?>
    </div>
</div>