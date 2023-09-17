<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <?php 
    include_once("../includes/db_config.php");
    if(isset($_POST['submit'])){
     extract($_POST);
     $sql = "INSERT INTO notice VALUES(NULL,'$title', '$date','$postby','$details')";
      $db->query($sql);
     if($db->affected_rows){
        echo "inserted Successfully";
     }
    }
    ?>
    <h2>New Notice Add</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
   
    <input type="text" name="title" placeholder="Enter Notice Title"><br><br>
    <input type="date" name="date" placeholder="Enter Add Notice Date"><br><br>
    <input type="text" name="postby" placeholder="Enter Post By Notice"><br><br>
    <textarea name="details" id="" cols="30" rows="10"></textarea><br><br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>