<?php
include_once("../includes/db_config.php"); // Include your database configuration file here

if (isset($_GET["id"])) {
    $student_id = $_GET["id"];

    // Check if the student ID exists in the database
    $check_query = "SELECT * FROM students WHERE s_id = '$student_id'";
    $stmt = $db->prepare($check_query);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Student ID exists, fetch student data for editing
        $student_data = $result->fetch_assoc();
    } else {
        // Student ID does not exist, handle the error (redirect or display an error message)
        // You can add your error handling logic here
        die("Student not found");
    }
} else {
    // No student ID provided, handle the error (redirect or display an error message)
    // You can add your error handling logic here
    die("Student ID not provided");
}

// Handle form submission for updating student data
if (isset($_POST["update"])) {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    // Update the student data in the database
    $update_query = "UPDATE students SET name = ?, gender = ?, dob = ?, address = ?, phone = ?, email = ? WHERE s_id = ?";
    $stmt = $db->prepare($update_query);
    $stmt->bind_param("ssssssi", $name, $gender, $dob, $address, $phone, $email, $student_id);

    if ($stmt->execute()) {
        // Data updated successfully, you can redirect to a success page or perform other actions
        header("Location: all_students.php");
        exit();
    } else {
        // Error occurred during the update, handle the error (redirect or display an error message)
        // You can add your error handling logic here
        die("Error updating student data");
    }
}
?>

<?php include_once("../includes/index_header.php"); ?>

<body>
    <?php include_once("../includes/index_sidebar.php"); ?>

    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Edit Student Data</h3>
        </div>
        <!-- Breadcubs Area End Here -->

        <!-- Edit Student Form Start Here -->
        <div class="card">
            <div class="card-body">
                <h2>Edit Student</h2>
                <form class="new-added-form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
                    <div class="row">
                        <div class="col-xl-4 form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter Name" class="form-control"
                                value="<?php echo $student_data['name']; ?>">
                        </div>
                        <div class="col-xl-4 form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control">
                                <option value="Male" <?php echo ($student_data['gender'] === 'Male') ? 'selected' : ''; ?>>
                                    Male
                                </option>
                                <option value="Female" <?php echo ($student_data['gender'] === 'Female') ? 'selected' : ''; ?>>
                                    Female
                                </option>
                            </select>
                        </div>
                        <div class="col-xl-4 form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" class="form-control"
                                value="<?php echo $student_data['dob']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 form-group">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter Address" class="form-control"
                                value="<?php echo $student_data['address']; ?>">
                        </div>
                        <div class="col-xl-4 form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" placeholder="Enter Phone" class="form-control"
                                value="<?php echo $student_data['phone']; ?>">
                        </div>
                        <div class="col-xl-4 form-group">
                            <label>E-Mail</label>
                            <input type="email" name="email" placeholder="Enter Email" class="form-control"
                                value="<?php echo $student_data['email']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" name="update"
                                class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Edit Student Form End Here -->

        <?php include_once("../includes/index_footer.php"); ?>
    </div>
</body>

</html>
