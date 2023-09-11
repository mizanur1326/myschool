<?php include_once("../includes/index_header.php")?>

<body>

<?php include_once("../includes/index_sidebar.php")?>

            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>submit attendence</h3>
                </div>
                
                <form action="">
                    <select id="st_id">
                    <option value="">select class </option>

                    <?php 
                    include("../includes/db_config.php");

                    $sql = "SELECT * FROM class";
                    $result = $db->query($sql);
                    while( $data = $result->fetch_assoc() ){
                    ?>
                    <option value="<?php echo $data['s_id'] ?>"> <?php echo $data['name'] ?> </option>
                    <?php  } ?>
                    </select>
                </form>
                    <div id="class_list" ></div>

            
                <script>
                    $(function () {
                        $("#st_id").change( function() {
                            var st_id = $("#st_id").val() ;
                            $.post("student_class.php", {id: st_id}, function (data , status) {
                                $("#class_list").html(data);
                            })
                        })
                    });
                </script>


                
                



                <?php include_once("../includes/index_footer.php")?>