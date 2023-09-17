<?php
include_once("../includes/db_config.php") //Here is db connect//

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php include_once("../includes/index_header.php") ;?>
</head>

<body>
<div class="text-center mt-4 mb-2" >
    <a class="btn btn-success" href="notice_entry.php">New Notice Add</a>
</div>
    <?php 
    include_once("../includes/index_sidebar.php");
    ?>
    <table class="table table-primary table-striped">
        <?php
        $sql = "SELECT * FROM notice ";
        $result = $db->query($sql);
        ?>
        <thead>
            <tr>
                <th>ID</th>
               <th>Title</th>
                <th>Date</th>
                <th>Posted By</th>
                <th>Details</th>
            </tr>
         
        </thead>
        <?php 
            while($row=$result->fetch_assoc()):
            ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['dob'] ?></td>
            <td><?php echo $row['posted_by'] ?></td>
            <td><?php echo $row['details'] ?></td>
            <td><a href="notice_delete.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
        <?php endwhile ?>
    </table>
    <?php include("../includes/index_footer.php") ?>
</body>
</html>