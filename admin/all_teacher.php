<?php include_once("../includes/db_config.php");
$sql = "SELECT * FROM teachers";
$result = $db->query($sql);
?>
<?php include_once("../includes/index_header.php");?>

<body>
<?php include_once("../includes/index_sidebar.php")?>
            <div class="dashboard-content-one">
                
                <div class="m-5">
                    <a href="add_teacher.php" class="btn btn-primary btn-lg">Add New Teacher</a>
                </div>

                <!-- Teacher Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Teachers Data</h3>
                            </div>

                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = $result->fetch_assoc()){?>
                                    <tr>
                                        <td><?php echo $row["id"]?></td>
                                        <td><?php echo $row["name"]?></td>
                                        <td><?php echo $row["gender"]?></td>
                                        <td><?php echo $row["class"]?></td>
                                        <td><?php echo $row["subject"]?></td>
                                        <td><?php echo $row["address"]?></td>
                                        <td><?php echo $row["phone"]?></td>
                                        <td><?php echo $row["email"]?></td>
                                        <td>
                                            <a href="#" class="eud">Edit ||</a>
                                            <a href="#" class="eud">Update ||</a>
                                            <a href="#" class="eud">Delete</a>
                                        </td>
                                                                             
                                    </tr>
                                    <?php };?>

                                    <!-- <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0022</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="img/figure/student3.png" alt="student"></td>
                                        <td>Jessia Rose</td>
                                        <td>Female</td>
                                        <td>1</td>
                                        <td>Mathematics</td>
                                        <td>A</td>
                                        <td>59 Australia, Sydney</td>
                                        <td>+ 123 9988568</td>
                                        <td>kazifahim93@gmail.com</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-times text-orange-red"></i>Close</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Teacher Table Area End Here -->
                <?php include_once("../includes/index_footer.php")?>