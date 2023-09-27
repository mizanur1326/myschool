<?php
include_once("../includes/db_config.php"); // Include your database configuration file here

// SQL query to retrieve all student data
$sql = "SELECT * FROM exam";

// Execute the query
$result = $db->query($sql);
?>

<?php include_once("../includes/index_header.php"); ?>
<style>
    #tableid {
        height: 450px;
        overflow: scroll;
    }
</style>

<body>
    <?php include_once("../includes/index_sidebar.php"); ?>

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3><a href="notice_entry.php" class="">Exam Schedule Form | Add New Schedule</a></h3>


            <!-- delete message  -->

            <?php if (isset($_SESSION['delete_msg'])) {
                $delete_msg  =  $_SESSION['delete_msg'];
            ?>
                <div class="alert alert-danger p-5 fw-bold" id="welcome-alert" role="alert">
                    <?php echo $delete_msg ?>
                </div>
            <?php unset($_SESSION['delete_msg']);
            } ?>


        </div>
        <!-- Breadcubs Area End Here -->

        <!-- Student Table Area Start Here -->
        <div class="card" id="tableid">
            <div class="card-body">
                <h2>All Exam Schedule </h2>
                <div class="class-filter">
                    <label for="classFilter">Filter by Class:</label>
                    <select onclick="filterTable()"  id="classFilter">
                        <option value="">All Classes</option>
                        <option value="1">Class 1</option>
                        <option value="2">Class 2</option>
                        <option value="3">Class 3</option>
                        <option value="4">Class 4</option>
                        <option value="5">Class 5</option>
                    </select>
                    
                </div>
                <table class="table table-striped bg-white">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Exam Name</th>
                            <th>Subject</th>
                            <th>Class</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="examTableBody">
                        <?php while ($row = $result->fetch_object()) { ?>
                            <tr>
                                <td><?php echo $row->id ?></td>
                                <td><?php echo $row->exam_name ?></td>
                                <td><?php echo $row->subject ?></td>
                                <td><?php echo $row->class ?></td>
                                <td><?php echo $row->date ?></td>
                                <td><?php echo $row->time ?></td>
                                <td>
                                    <a href="exam_delete_schedule.php?id=<?php echo $row->id ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script>

        </script>
        <!-- Student Table Area End Here -->
        <script>
            // Function to filter the table
            function filterTable() {
                const selectedClass = document.getElementById("classFilter").value;
                const tableBody = document.getElementById("examTableBody");
                const rows = tableBody.getElementsByTagName("tr");

                for (let i = 0; i < rows.length; i++) {
                    const row = rows[i];
                    const classCell = row.getElementsByTagName("td")[3]; // Assuming class is in the 4th column (index 3)

                    if (selectedClass === "" || classCell.innerHTML === selectedClass) {
                        row.style.display = ""; // Show the row
                    } else {
                        row.style.display = "none"; // Hide the row
                    }
                }
            }
        </script>

        <?php include_once("../includes/index_footer.php"); ?>
    </div>
</body>

</html>