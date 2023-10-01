<?php include_once("../includes/db_config.php");
$sql = "SELECT * FROM routine";
$result = $db->query($sql);
?>
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
        <div class="breadcrumbs-area">

        </div>
        <!-- Breadcubs Area End Here -->

        <!-- Student Table Area Start Here -->
        <div class="card" id="tableid">



            <div class="card-body">
                <h2>Class Routine</h2>
                <div class="class-filter">
                    <label for="classFilter">Filter by Class:</label>
                    <select id="classFilter">
                        <option value="all">All Classes</option>
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
                            <th>Subject Name</th>
                            <th>Class</th>
                            <th>Teacher Name</th>
                            <th>Time</th>
                            <th>Day</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["subject_name"]; ?></td>
                                <td><?php echo $row["class"]; ?></td>
                                <td><?php echo $row["te_name"]; ?></td>
                                <td><?php echo $row["time"]; ?></td>
                                <td><?php echo $row["day"]; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Student Table Area End Here -->

        <?php include_once("../includes/index_footer.php"); ?>
    </div>
    <script>
        function filterTable() {
            // Get the selected class from the dropdown
            var selectedClass = document.getElementById("classFilter").value;

            // Get the table and rows
            var table = document.querySelector(".table");
            var rows = table.querySelectorAll("tbody tr");

            // Loop through the rows
            rows.forEach(function(row) {
                var classCell = row.getElementsByTagName("td")[2]; // Assuming class is in the third column
                
                var classValue = classCell.textContent;

                // Check if the class matches the selected class or if "All Classes" is selected
                var shouldDisplay = (selectedClass === "all" || classValue === "Class " + selectedClass);

                // Set the display style accordingly
                row.style.display = shouldDisplay ? "" : "none";
            });
        }

        // Add event listener to the class filter dropdown
        document.getElementById("classFilter").addEventListener("change", filterTable);

        // Initial filtering when the page loads
        filterTable();
    </script>


    <?php //include_once("../includes/index_footer.php") 
    ?>