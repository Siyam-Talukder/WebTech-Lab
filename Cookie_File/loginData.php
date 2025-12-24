<?php 
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    
    if($username == $_COOKIE['username'] && $password == $_COOKIE['password']){
        header("Location: cookie.php");
    }else{
        $message="Wrong Password";
        echo "<script type='text/javascript'>alert('$message');</script>";
       
    }
?>