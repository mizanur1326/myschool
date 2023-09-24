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

    #searchInput {}

    .table-top {
        display: flex;
        gap: 30px;
        margin-bottom: 20px;
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


                    <!-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="fa fa-search form-control-feedback"></span>
                        </div>
                        <input class="p-2" type="text" id="searchInput" placeholder="Search for a student...">
                    </div> -->


                    <select id="statusFilter">
                        <option value="all">ALL</option>
                        <option value="paid">Paid</option>
                        <option value="unpaid">Unpaid</option>
                    </select>

                </div>

                <table class="table table-striped bg-white">
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Fee Type</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $row["st_id"]; ?></td>
                                <td><?php echo $row["st_name"]; ?></td>
                                <td><?php echo $row["class"]; ?></td>
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
                    var studentName = row.getElementsByTagName("td")[1]; // Assuming name is in the second column
                    var statusCell = row.getElementsByTagName("td")[5]; // Assuming status is in the sixth column

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

        <!-- // Function to perform the status filter -->
        <script>
            function filterTableByStatus() {
                // Get the selected status from the dropdown
                var selectedStatus = document.getElementById("statusFilter").value;

                // Get the table and table rows
                var table = document.querySelector(".table");
                var rows = table.querySelectorAll("tbody tr");

                // Loop through all the table rows
                for (var i = 0; i < rows.length; i++) {
                    var row = rows[i];
                    var statusCell = row.getElementsByTagName("td")[5]; // Assuming status is in the sixth column

                    // Check if the selected status matches the row's status
                    if (selectedStatus === "all" || statusCell.textContent.toLowerCase() === selectedStatus) {
                        // If it matches or "All" is selected, display the row; otherwise, hide it
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                }
            }

            // Add an event listener to the status dropdown
            document.getElementById("statusFilter").addEventListener("change", filterTableByStatus);
        </script>



        <?php include_once("../includes/index_footer.php"); ?>
    </div>
</body>

</html>