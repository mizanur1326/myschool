<?php
include_once("../includes/db_config.php");
$sql = "SELECT * FROM expenses";
$result = $db->query($sql);
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
</style>

<body>
    <?php include_once("../includes/index_sidebar.php"); ?>

    <div class="dashboard-content-one">
        <div class="breadcrumbs-area">
            <h3><a href="add_collection.php" class="">All Expenses | Add Expenses </a></h3>
        </div>

        <!-- Expense Table Area Start Here -->
        <div class="card" id="tableid">
            <div class="card-body">
                <h2>All Expenses List</h2>

                <div class="table-top">

                    <div class="input-group col-md-4">
                        <input class="p-2" type="text" id="searchInput" placeholder="Search for a Name ...">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>

                    <select id="statusFilter">
                        <option value="all">ALL</option>
                        <option value="paid">Paid</option>
                        <option value="unpaid">Due</option>
                    </select>

                </div>

                <table class="table table-striped bg-white">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Expense Type</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>

                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["te_name"]; ?></td>
                                <td><?php echo $row["expense_type"]; ?></td>
                                <td><?php echo $row["amount"]; ?></td>
                                <td><?php echo $row["status"]; ?></td>
                                <td><?php echo $row["date"]; ?></td>


                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Student Table Area End Here -->

        <!-- Function to perform the search -->
        <script>
            function searchTable() {
                // Get the input value and convert it to lowercase for case-insensitive search
                var input = document.getElementById("searchInput").value.toLowerCase();

                // Get the selected status from the dropdown
                var selectedStatus = document.getElementById("statusFilter").value;

                // Get the table and table rows
                var table = document.querySelector(".table");
                var rows = table.querySelectorAll("tbody tr");

                // Loop through all the table rows
                for (var i = 0; i < rows.length; i++) {
                    var row = rows[i];
                    var studentName = row.getElementsByTagName("td")[0]; // Assuming name is in the second column
                    var statusCell = row.getElementsByTagName("td")[3]; // Assuming status is in the sixth column

                    // Check if the student name contains the search input and the status matches the selected status
                    if (studentName && (selectedStatus === "all" || statusCell.textContent.toLowerCase() === selectedStatus)) {
                        var name = studentName.textContent.toLowerCase();
                        if (name.includes(input)) {
                            // If it matches, display the row; otherwise, hide it
                            row.style.display = "";
                        } else {
                            row.style.display = "none";
                        }
                    } else {
                        // If the status does not match the selected status, hide the row
                        row.style.display = "none";
                    }
                }
            }

            // Add event listeners to the search input field and status dropdown
            document.getElementById("searchInput").addEventListener("input", searchTable);
            document.getElementById("statusFilter").addEventListener("change", searchTable);
        </script>

        <?php include_once("../includes/index_footer.php"); ?>
    </div>
</body>

</html>