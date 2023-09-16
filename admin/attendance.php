<?php include_once("../includes/db_config.php")?>
<?php include_once("../includes/index_header.php")?>

<body>

<?php include_once("../includes/index_sidebar.php")?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="mt-5 mb-0">
                    <h4>Select Class for Take Attendance</h4>
                </div>
                
                <form action="" class="mt-0 mb-5">
                    <select id="st_id">
                    <option value="">Select Class</option>

                    <?php 
                    $sql = "SELECT * FROM class";
                    $result = $db->query($sql);
                    while( $data = $result->fetch_assoc() ){
                    ?>
                    <option value="<?php echo $data['c_id'] ?>"> <?php echo $data['name'] ?> </option>
                    <?php  } ?>
                    </select>
                </form>
                    <div id="class_list" ></div>

            
                <script>
                    jQuery(function () {
                        jQuery("#st_id").change( function() {
                            var st_id = $("#st_id").val() ;
                            jQuery.post("attendance_sheet.php", {id:st_id}, function (data , status) {
                                jQuery("#class_list").html(data);
                            })
                        })
                    });
                </script>                            

                <?php include_once("../includes/index_footer.php")?>