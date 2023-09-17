 <!-- check user validation -->
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
         <div class="breadcrumbs-area">
             <h3>Admin Dashboard</h3>
         </div>


         <!--  login welcome message  -->
         <?php
            if (isset($_SESSION['welcome_msg'])) {
                $welcome_msg = $_SESSION['welcome_msg'];
                unset($_SESSION['welcome_msg']);
            ?>
             <div class="alert alert-success p-5 fw-bold" id="welcome-alert" role="alert">
                 <?php echo $welcome_msg ?>
             </div>
             <script>
                 setTimeout(function() {
                     var welcomeAlert = document.getElementById('welcome-alert');
                     if (welcomeAlert) {
                         welcomeAlert.style.display = 'none';
                     }
                 }, 3000); // 3000 milliseconds (3 seconds)
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
                                 <div class="item-number"><span class="count counter">150000</span></div>
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
                                 <div class="item-number"><span class="count counter">850</span></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <script>
             $(function() {
                 $('.count').each(function() {
                     $(this).prop('Counter', 0).animate({
                         Counter: $(this).text()
                     }, {
                         duration: 2000,
                         easing: 'swing',
                         step: function(now) {
                             $(this).text(Math.ceil(now));
                         }
                     });
                 });
             });
         </script>
         <!-- Dashboard summery End Here -->
         <?php include_once("../includes/index_footer.php") ?>