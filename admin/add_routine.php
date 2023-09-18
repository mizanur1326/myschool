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
                            <h3>Add Class Routine</h3>
                        </div>

                    </div>
                    <?php
                    if (isset($_POST["submit"])) {
                        extract($_POST);
                        require_once("../includes/db_config.php");

                        $sql = "INSERT INTO routine VALUES(NULL, '$su_name', '$class', NULL, '$te_name', '$time', '$day')";

                        $db->query($sql);

                        if ($db->affected_rows) {
                            echo "Info Successfully inserted";
                        }
                    }
                    ?>
                    <form class="new-added-form" method="post">
                        <div class="row">
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Subject Name</label>
                                <input type="text" name="su_name" placeholder="Add Subject Name" class="form-control">
                            </div>
                            <!-- <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Subject Type</label>
                                <select class="select2">
                                    <option value="1">Bangla</option>
                                    <option value="2">English</option>
                                </select>

                            </div> -->
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Select Class</label>
                                <select class="select2" name="class">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                                </select>
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Select Teacher</label>
                                <select class="select2" name="te_name">
                                    <option value="1">Mark Willy</option>
                                    <option value="2">Jessia Rose</option>
                                    <option value="3">Umme Mahjabeen</option>
                                    <option value="4">Thomas</option>
                                    <option value="5">Daniel</option>
                                    <option value="6">Martin</option>
                                </select>
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Class Time</label>
                                <input type="text" name="time" placeholder="Add Class Time" class="form-control">
                            </div>
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Class Day</label>
                                <input type="text" name="day" placeholder="Add Class Day" class="form-control">
                            </div>
                            <div class="col-12 form-group mg-t-8">
                                <button type="submit"
                                    class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="submit">Save</button>
                                <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <?php include_once("../includes/index_footer.php") ?>