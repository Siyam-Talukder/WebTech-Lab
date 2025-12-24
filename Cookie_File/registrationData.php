<?php 
    $username = $_POST['reg_uname'];
    $password = $_POST['reg_pass'];
    $email = $_POST['reg_email'];

    setcookie('username', $username, time()+3600);
    setcookie('password', $password, time()+3600);
    setcookie('email', $email, time()+3600);



    $success = true;
    if($success){
        header("Location: login.php");
    }
    
?>