<?php 
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass =sha1($password);
    include("../includes/db_config.php");
    $sql ="SELECT email,password FROM admin_login  WHERE email='$email' AND password='$pass'";
    $result =$db->query($sql);
    $row=$result->fetch_assoc();
    session_start();
    if($result->num_rows){
    $_SESSION['u_email'] = $row['email'];
    header("Location:home.php");
    }
    
    else{
        $_SESSION['error'] = "Email or Password Incorrect";

        header("Location:index.php");
    }

}

?>