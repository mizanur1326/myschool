<?php 

 include("../includes/db_config.php");

$id =  $_POST['id'];  
$sql = " SELECT * FROM student_class_view WHERE s_id = '$id' ";
$result = $db->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="2">
<tr>
    <th>Student Name</th>
    <th>Class</th>
</tr>

<?php while( $data = $result->fetch_assoc() ) :  ?>
    <tr>  
    <td><?php  echo $data['Student_name']  ?> </td> 
    <td><?php  echo $data['name']  ?>  </td>
    </tr>
<?php endwhile ; ?>

</table>


</body>
</html>