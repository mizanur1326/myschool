<?php include_once("../includes/index_header.php");?>


        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
<?php include_once("../includes/index_sidebar.php");?>
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

                            if(isset($_POST["update"])){
                                extract($_POST);

                                echo "UPDATE teachers SET name = '$name', gender = '$gender', class= '$class', subject = '$subject', address = '$address', phone = '$phone', email = '$email' WHERE t_id = '$id' ";

                                $sql = "UPDATE teachers SET name = '$name', gender = '$gender', class= '$class', subject = '$subject', address = '$address', phone = '$phone', email = '$email' WHERE t_id = '$id' ";

                                $db->query($sql);

                                if($db->affected_rows){
                                    echo "Info Successfully Updated";
                                } 
                            }
                            
                            $result = $db->query("SELECT * FROM teachers WHERE t_id='$id'");
                            $row = $result->fetch_assoc();
                            ?>
                        <form class="new-added-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                            <div class="row">
                                <div class="col-xl-3 form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Enter Your Name" class="form-control" value="<?php echo $row["name"]?>">
                                </div>

                                <div class="col-xl-3 form-group">
                                    <label>Gender</label>
                                    <select class="dropdown-item" name="gender">
                                        <option value="">Please Select Gender</option>
                                        <option value="Male" <?php if($row["gender"]=="Male") echo "selected";?>>Male</option>
                                        <option value="Female" <?php if($row["gender"]=="Female") echo "selected";?>>Female</option>
                                        <option value="Others" <?php if($row["gender"]=="Others") echo "selected";?>>Others</option>
                                    </select>
                                </div>
                                
                                <div class="col-xl-3 form-group">
                                    <label>Class</label>
                                    <select class="select2 dropdown-item" name="class">
                                        <option value="" >Please Select Class</option>
                                        <option value="1" <?php if($row["class"]=="1") echo "selected";?>>1</option>
                                        <option value="2" <?php if($row["class"]=="2") echo "selected";?>>2</option>
                                        <option value="3"  <?php if($row["class"]=="3") echo "selected";?>>3</option>
                                        <option value="4"  <?php if($row["class"]=="4") echo "selected";?>>4</option>
                                        <option value="5" <?php if($row["class"]=="5") echo "selected";?>>5</option>
                                    </select>
                                </div>

                                <div class="col-xl-3 form-group">
                                    <label>Subject</label>
                                    <select class="select2 dropdown-item" name="subject">
                                        <option value="">Please Select Subject</option>
                                        <option value="Bangla" <?php if($row["subject"]=="Bangla") echo "selected";?>>Bangla</option>
                                        <option value="English" <?php if($row["subject"]=="English") echo "selected";?>>English</option>
                                        <option value="Math" <?php if($row["subject"]=="Math") echo "selected";?>>Math</option>
                                        <option value="Science" <?php if($row["subject"]=="Science") echo "selected";?>>Science</option>
                                        <option value="GK" <?php if($row["subject"]=="GK") echo "selected";?>>GK</option>
                                    </select>
                                </div>

                                
                                <div class="col-xl-3 form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" placeholder="Enter Your Address" class="form-control" value="<?php echo $row["address"]?>">
                                </div>

                                
                                <div class="col-xl-3 form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" placeholder="Enter Your Phone" class="form-control" value="<?php echo $row["phone"]?>">
                                </div>

                                <div class="col-xl-3 form-group">
                                    <label>E-Mail</label>
                                    <input type="email" name="email" placeholder="Enter Your Email" class="form-control" value="<?php echo $row["email"]?>">
                                </div>

                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" name="update" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                    <input type="" value="<?php echo $row["t_id"]?>" name="id">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
                <?php include_once("../includes/index_footer.php");?>
            </div>
    </div>