<?php 
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass =sha1($password);
    include("../includes/db_config.php");
    $sql ="SELECT email,password FROM admin_login  WHERE email='$email' AND password='$pass'";
    $result =$db->query($sql);
    $row=$result->fetch_assoc();

    if($result->num_rows){
    session_start();
    $_SESSION['u_email'] = $row['email'];
    $_SESSION['welcome_msg'] = " Welcome To Myschool ";
    header("Location:home.php");
    }
    
    else{
        $_SESSION['error'] = "Email or Password Incorrect";
        header("Location:index.php");
    }

}

?>