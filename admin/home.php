 <?php
    session_start();
    if (!isset($_SESSION['u_email'])) {
        header("Location:index.php");
    }
    ?>




 <?php include_once("../includes/index_header.php") ?>

 <body>

     <?php include_once("../includes/index_sidebar.php") ?>

     <div class="dashboard-content-one">
         <!-- Breadcubs Area Start Here -->
         <div class="breadcrumbs-area">
             <h3>Admin Dashboard</h3>
         </div>
         <?php
            if (isset($_SESSION['welcome_msg'])) {
                $welcome_msg = $_SESSION['welcome_msg'];
                unset($_SESSION['welcome_msg']);
            ?>
             <div class="alert alert-success p-5" id="welcome-alert" role="alert">
                 <?php echo $welcome_msg ?>
             </div>
             <script>
                 setTimeout(function() {
                     var welcomeAlert = document.getElementById('welcome-alert');
                     if (welcomeAlert) {
                         welcomeAlert.style.display = 'none';
                     }
                 }, 2000); // 3000 milliseconds (3 seconds)
             </script>
         <?php
            }
            ?>

         <!-- Breadcubs Area End Here -->
         <!-- Dashboard summery Start Here -->
         <div class="row gutters-20">
             <div class="col-xl-3 col-sm-6 col-12">
                 <div class="dashboard-summery-one mg-b-20">
                     <div class="row align-items-center">
                         <div class="col-6">
                             <div class="item-icon bg-light-green ">
                                 <i class="flaticon-classmates text-green"></i>
                             </div>
                         </div>
                         <div class="col-6">
                             <div class="item-content">
                                 <div class="item-title">Students</div>
                                 <div class="item-number"><span class="counter" data-num="150000">1,50,000</span></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-sm-6 col-12">
                 <div class="dashboard-summery-one mg-b-20">
                     <div class="row align-items-center">
                         <div class="col-6">
                             <div class="item-icon bg-light-blue">
                                 <i class="flaticon-multiple-users-silhouette text-blue"></i>
                             </div>
                         </div>
                         <div class="col-6">
                             <div class="item-content">
                                 <div class="item-title">Teachers</div>
                                 <div class="item-number"><span class="counter" data-num="2250">2,250</span></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Dashboard summery End Here -->
         <?php include_once("../includes/index_footer.php") ?>