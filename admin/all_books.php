<?php
include_once("../includes/db_config.php");
$sql = "SELECT * FROM books";
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
            <h3><a href="add_books.php" class="">All Books | Add a Book</a></h3>
        </div>

        <!-- Collection Table Area Start Here -->
        <div class="card" id="tableid">
            <div class="card-body">
                <h2>All Books List</h2>
                <div class="table-top">

                    <div class="input-group col-md-4">
                        <input class="p-2" type="text" id="searchInput" placeholder="Search for a Book">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>

                    <select id="statusFilter">
                        <option value="all">ALL</option>
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

                            <th>SL</th>
                            <th>Book Name</th>
                            <th>Subject</th>
                            <th>Class</th>
                            <th>Published</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $sl = 0 ;
                        while ($row = $result->fetch_assoc()) {
                        
                        ?>

                            <tr>
                                <td><?php $sl++; echo $sl ?></td>
                                <td><?php echo $row["book_name"]; ?></td>
                                <td><?php echo $row["subject"]; ?></td>
                                <td><?php echo $row["class"]; ?></td>
                                <td><?php echo $row["published"]; ?></td>
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
    // Get the input value and selected class filter
    var input = document.getElementById("searchInput").value.toLowerCase();
    var selectedClass = document.getElementById("statusFilter").value;

    // Get the table and rows
    var table = document.querySelector(".table");
    var rows = table.querySelectorAll("tbody tr");

    // Loop through the rows
    rows.forEach(function (row) {
        var bookNameCell = row.getElementsByTagName("td")[1]; // Assuming book name is in the first column
        var classCell = row.getElementsByTagName("td")[3]; // Assuming class is in the third column
        var bookName = bookNameCell.textContent.toLowerCase();
        var bookClass = classCell.textContent.toLowerCase();

        // Check if both conditions are met for displaying the row
        var shouldDisplay = (selectedClass === "all" || bookClass === selectedClass) && bookName.includes(input);

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