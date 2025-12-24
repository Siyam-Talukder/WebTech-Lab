<?php

    $color = $_POST['color'];
    $time = $_POST['expire'];
    setcookie('color',$color,strtotime($time));
    header("Location: cookie.php");

?>