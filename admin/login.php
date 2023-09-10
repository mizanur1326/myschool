<?php 
include("includes/db_config.php");
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql ="SELECT email,password FROM admin_login  WHERE email='$email' AND password='$password'";
    $result =$db->query($sql);
    $row=$result->fetch_assoc();
    session_start();
    if($result->num_rows){
    $_SESSION['u_email']=$row['email'];
    header("Location:home.php");
    }
    else{
        $_SESSION['error']="login Faild Please Try Again";
        header("Location:index.php");
    }

}

?>