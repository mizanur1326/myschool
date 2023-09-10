<?php include_once("../includes/index_header.php")?>

<body>

<?php include_once("../includes/index_sidebar.php")?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->

                <?php 
                $id =  $_POST['id'];


                $sql = " SELECT * FROM student_class_view WHERE id = '$id' ";
                $result = $db->query($sql);
                
                ?>

                <div class="breadcrumbs-area">
                    <h3>ALL attendence</h3>
                </div>
                
                



                <?php include_once("../includes/index_footer.php")?>