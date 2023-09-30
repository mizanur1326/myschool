<!-- ====  collection backup =========

<li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-cash-coin"></i><span>Accounts</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">

                            <a href="../admin/all_collections.php" class="nav-link"><i class="fas fa-angle-right"></i>All
                                Collections</a>
                        </li>

                        <li class="nav-item">
                            <a href="../admin/all_expenses.php" class="nav-link"><i class="fas fa-angle-right"></i>Expenses</a>
                        </li>
                        <li class="nav-item">
                            <a href="../admin/add_collection.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Collections</a>
                        </li>

                        <li class="nav-item">
                            <a href="../admin/add_expenses.php" class="nav-link"><i class="fas fa-angle-right"></i>Add Expenses</a>
                        </li>
                       
                    </ul>
                </li>
                
==== ===============                
 -->


<?php
include_once("../includes/db_config.php");
$sql = "SELECT * FROM student_fees_collection";
$result = $db->query($sql);


?>

<?php include_once("../includes/index_header.php"); ?>
<style>
    #tableid {
        height: 450px;
        overflow: scroll;
    }

    #statusFilter {
        width: 100px;
    }

    .table-top {
        display: flex;
        gap: 30px;
        margin-bottom: 30px;
    }

    .green {
        color: green;
        font-weight: bold;

    }

    .red {
        color: red;
        font-weight: bold;

    }
</style>

</style>

<body>
    <?php include_once("../includes/index_sidebar.php"); ?>

    <div class="dashboard-content-one">
        <div class="breadcrumbs-area">
            <h3><a href="add_collection.php" class="">All Collection| Add Collection fees</a></h3>
        </div>

        <!-- Collection Table Area Start Here -->
        <div class="card" id="tableid">
            <div class="card-body">
                <h2>All Collections List</h2>
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
                        <option value="all">Status</option>
                        <option value="paid">Paid</option>
                        <option value="due">Due</option>
                    </select>


                    <select id="monthFilter">
                        <option value="all">Select Month</option>
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="Aug">Aug</option>
                        <option value="Sept">Sept</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                    </select>

                </div>

                <table class="table table-striped bg-white">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Fee Type</th>
                            <th>Month</th>
                            <th>Amount</th>
                            <th>Paid</th>
                            <th>Due</th>
                            <th>Status</th>
                            <th>Date</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) {
                        ?>

                            <tr>
                                <td><?php echo $row["st_id"]; ?></td>
                                <td><?php echo $row["st_name"]; ?></td>
                                <td><?php echo $row["class"]; ?></td>
                                <td><?php echo $row["expense_type"]; ?></td>
                                <td><?php echo $row["month"]; ?></td>
                                <td><?php echo $row["amount"]; ?></td>
                                <td><?php echo $row["paid"]; ?></td>
                                <td><?php echo $row["due"]; ?></td>
                                <td class="status-cell"><?php echo $row['status']; ?></td>
                                <td><?php echo $row['date']; ?></td>


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
        // Get the input value, selected status, and selected month
        var input = document.getElementById("searchInput").value.toLowerCase();
        var selectedStatus = document.getElementById("statusFilter").value;
        var selectedMonth = document.getElementById("monthFilter").value;

        // Get the table and rows
        var table = document.querySelector(".table");
        var rows = table.querySelectorAll("tbody tr");

        // Loop through the rows
        rows.forEach(function(row) {
            var studentName = row.getElementsByTagName("td")[1]; // Assuming name is in the second column
            var statusCell = row.getElementsByClassName("status-cell")[0]; // Get the status cell by class
            var monthCell = row.getElementsByTagName("td")[4]; // Assuming month is in the fifth column

            var name = studentName.textContent.toLowerCase();
            var status = statusCell.textContent.toLowerCase();
            var month = monthCell.textContent;

            // Check if all three conditions are met for displaying the row
            var shouldDisplay = (selectedStatus === "all" || status === selectedStatus) &&
                (selectedMonth === "all" || month === selectedMonth) &&
                name.includes(input);

            // Set the display style accordingly
            row.style.display = shouldDisplay ? "" : "none";

            // Apply background color based on status
            if (status === 'paid') {
                statusCell.classList.add("green");
                statusCell.classList.remove("red");
            } else {
                statusCell.classList.add("red");
                statusCell.classList.remove("green");
            }
        });
    }

    // Add event listener to both search input, status dropdown, and month dropdown
    document.getElementById("searchInput").addEventListener("input", filterTable);
    document.getElementById("statusFilter").addEventListener("change", filterTable);
    document.getElementById("monthFilter").addEventListener("change", filterTable);

    // Initial filtering when the page loads
    filterTable();
</script>






        <?php include_once("../includes/index_footer.php"); ?>
    </div>
</body>

</html>