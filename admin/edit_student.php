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
            <h3>Student Info Edit Form</h3>

        </div>
        <!-- Breadcubs Area End Here -->
        <!-- Add New Teacher Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Edit Student Info</h3>
                    </div>
                </div>
                <?php
                    require_once("../includes/db_config.php");
                    $id = $_REQUEST["id"];

                    if (isset($_POST["update"])) {
                        extract($_POST);
                        $password = $_POST["password"];
                        $password = sha1($password);

                        $sql = "UPDATE students SET  name = '$name', class = '$class', gender = '$gender', dob = '$dob', address = '$address', phone = '$phone', email = '$email', password = '$password' WHERE s_id = '$id' ";

                        $db->query($sql);

                        if ($db->affected_rows) {
                            echo "Info Successfully Updated";
                        }
                    }

                    $result = $db->query("SELECT * FROM students WHERE s_id = '$id' ");
                    $row = $result->fetch_assoc();
                ?>
                <form class="new-added-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="row">
                        <div class="col-xl-4 form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter Your Name" class="form-control" value="<?php echo $row["name"] ?>">
                        </div>


                        <div class="col-xl-2 form-group">
                                    <label>Class</label>
                                    <select class="select2 dropdown-item" name="class">
                                        <option value="" >Select Class</option>
                                        <option value="1" <?php if($row["class"]=="1") echo "selected";?>>1</option>
                                        <option value="2" <?php if($row["class"]=="2") echo "selected";?>>2</option>
                                        <option value="3" <?php if($row["class"]=="3") echo "selected";?>>3</option>
                                        <option value="4" <?php if($row["class"]=="4") echo "selected";?>>4</option>
                                        <option value="5" <?php if($row["class"]=="5") echo "selected";?>>5</option>
                                    </select>
                        </div>

                        <div class="col-xl-3 form-group">
                            <label>Gender</label>
                            <div class="input-group m-3">
                                <label class="form-check-label m-2">Male</label>
                                <input type="radio" name="gender" value="Male" <?php echo ($row["gender"] == "Male") ? "checked" : ""; ?>>
                                <label class="form-check-label m-2">Female</label>
                                <input type="radio" name="gender" value="Female" <?php echo ($row["gender"] == "Female") ? "checked" : ""; ?>>
                            </div>
                        </div>

                        
                        <div class="col-xl-3 form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" class="form-control" value="<?php echo $row["dob"] ?>">
                        </div>

                    </div>

                    <div class="row">

                        
                        <div class="col-xl-3 form-group">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter Your Address" class="form-control" value="<?php echo $row["address"] ?>">
                        </div>

                        <div class="col-xl-3 form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" placeholder="Enter Your Phone" class="form-control" value="<?php echo $row["phone"] ?>">
                        </div>

                        <div class="col-xl-3 form-group">
                            <label>E-Mail</label>
                            <input type="email" name="email" placeholder="Enter Your Email" class="form-control" value="<?php echo $row["email"] ?>">
                        </div>

                        <div class="col-xl-3 form-group">
                            <label>Change Password</label>
                            <input type="password" name="password" placeholder="123 id default password" class="form-control" value="<?php echo $row["password"] ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" name="update"
                                class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                            <input type="hidden" value="<?php echo $row["s_id"] ?>" name="id">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Add New Teacher Area End Here -->
        <?php include_once("../includes/index_footer.php"); ?>
    </div>
</div>