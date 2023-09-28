 <?php
include_once("../includes/db_config.php");
$sql = "SELECT * FROM result";
$result = $db->query($sql);
$pass = "<p class='text-success font-weight-bold'> Pass </p>" ;
$fail = "<p class='text-danger' font-weight-bold> Fail </p>" ;


?>

<?php include_once("../includes/index_header.php"); ?>
<style>
    #tableid {
        height: 450px;
        overflow: scroll;
    }


    .table-top {
        display: flex;
        gap: 30px;
        margin-bottom: 20px;
    }
    .green {
        background-color: green;
        border-radius: 20px;
        color: white;
        font-weight: bold;
        text-align: center;
    }
    .red {
        background-color: red;
        border-radius: 20px;
        color: white;
        font-weight: bold;
        text-align: center;
    }

</style>

</style>

<body>
    <?php include_once("../includes/index_sidebar.php"); ?>

    <div class="dashboard-content-one">
        <div class="breadcrumbs-area">
            <h3><a href="add_results.php" class="">All Results | Add Results </a></h3>
        </div>

        <!-- Collection Table Area Start Here -->
        <div class="card" id="tableid">
            <div class="card-body">
                <h2>All Results</h2>
                <div class="table-top">

                    <div class="input-group col-md-4">
                    <input class="p-2" type="text" id="searchInput" placeholder="Search for a student...">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>

                    <select id="statusFilter">
                        <option value="all">ALL</option>
                        <option value="pass">Pass</option>
                        <option value="fail">Fail</option>
                    </select>

                </div>

                <table class="table table-striped bg-white">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Exam name</th>
                            <th>Marks</th>
                            <th>Result</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                          
                            <tr>
                                <td><?php echo $row["st_id"]; ?></td>
                                <td><?php echo $row["st_name"]; ?></td>
                                <td><?php echo $row["st_class"]; ?></td>
                                <td><?php echo $row["exam_name"]; ?></td>
                                <td><?php echo $row["marks"]; ?></td>
                                <td> <?php echo $row["marks"] <= 33 ? $fail : $pass  ?>  </td>
                                <td> <a class="bi bi-pencil-fill btn btn-primary p-3" href=""></a> </td>
                                


                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Student Table Area End Here -->

        <!-- Function to perform the search -->
        <script>
    function filterTable() {
        // Get the input value and selected status
        var input = document.getElementById("searchInput").value.toLowerCase();
        var selectedStatus = document.getElementById("statusFilter").value;

        // Get the table and rows
        var table = document.querySelector(".table");
        var rows = table.querySelectorAll("tbody tr");

        // Loop through the rows
        rows.forEach(function (row) {
            var studentName = row.getElementsByTagName("td")[1]; // Assuming name is in the second column
            var statusCell = row.getElementsByTagName("td")[5]; // Assuming status is in the sixth column
            var name = studentName.textContent.toLowerCase();
            var status = statusCell.textContent.toLowerCase();

            // Check if both conditions are met for displaying the row
            var shouldDisplay = (selectedStatus === "all" || status === selectedStatus) && name.includes(input);

            // Set the display style accordingly
            row.style.display = shouldDisplay ? "" : "none";
        });
    }

    // Add event listener to both search input and status dropdown
    document.getElementById("searchInput").addEventListener("input", filterTable);
    document.getElementById("statusFilter").addEventListener("change", filterTable);

    // Initial filtering when the page loads
    filterTable();
</script>
 



        <?php include_once("../includes/index_footer.php"); ?>
    </div>
</body>

</html>