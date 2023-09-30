<?php include_once("../includes/index_header.php"); ?>

<?php include_once("../includes/index_sidebar.php") ?>
<style>
    #tableid {
        height: 450px;
        overflow: scroll;
    }

    #PA {
        height: 30px;
        font-size: 15px;
    }
</style>

<body>

    <?php include_once("../includes/index_sidebar.php") ?>

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="mt-5 mb-0">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Add Collections </h3>
                        </div>

                    </div>
<?php
if (isset($_POST["submit"])) {
    extract($_POST);
    require_once("../includes/db_config.php");

    $sql = "INSERT INTO books VALUES( NULL, '$book_name', '$subject', '$class', '$published')";

    $db->query($sql);

    if ($db->affected_rows) {
        echo "Info Successfully inserted";
    }
}
?>
                    <form class="new-added-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <div class="row">
                        <div class="col-xl-3 form-group">
                            <label>Book Name</label>
                            <input type="text" name="book_name" placeholder="Enter Book Name" class="form-control">
                        </div>

                        <div class="col-xl-3 form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" placeholder="Enter Subject " class="form-control">
                        </div>


                        <div class="col-xl-2 form-group">
                                    <label>Class</label>
                                    <select class="select2 dropdown-item" name="class">
                                        <option value="" >Select Class</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                        </div>
                        
                        <div class="col-xl-3 form-group">
                            <label>Published</label>
                            <input type="date" name="published" class="form-control">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" name="submit"
                                class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Submit</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>




        <?php include_once("../includes/index_footer.php") ?>