<?php 
include_once("../includes/index_header.php");
?>

<?php 
include_once("../includes/index_sidebar.php");
?>


    <title>Add New Teacher</title>
</head>
<body>
    <div>
        <h2 class="container m-5">Add New Teacher</h2>
        <form action="" method="post" class="">
            <div class="container m-5">
                <label for="name" class="form-label">Name :</label>
                <input type="text" class="form-control">
            </div>
            <div class="container m-5">
            <div class="form-check">
                    <input class="form-check" type="radio" name="gender" >
                    <label class="form-check-label">Male</label>

                    <input class="form-check" type="radio" name="gender">
                    <label class="form-check-label" >Female</label>
                </div>

            </div>
        </form>
    </div>
</body>


<?php 
include_once("../includes/index_footer.php");
?>