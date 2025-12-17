<?php


$_SESSION['fname'] = isset($_POST['fname']) ? $_POST['fname'] : '';
$_SESSION['lname'] = isset($_POST['lname']) ? $_POST['lname'] : '';
$_SESSION['gender'] = isset($_POST['gender']) ? $_POST['gender'] : '';
$_SESSION['father_name'] = isset($_POST['father_name']) ? $_POST['father_name'] : '';
$_SESSION['mother_name'] = isset($_POST['mother_name']) ? $_POST['mother_name'] : '';
$_SESSION['blood'] = isset($_POST['blood']) ? $_POST['blood'] : '';
$_SESSION['religion'] = isset($_POST['religion']) ? $_POST['religion'] : '';
$_SESSION['email'] = isset($_POST['email']) ? $_POST['email'] : '';
$_SESSION['mobile'] = isset($_POST['mobile']) ? $_POST['mobile'] : '';
$_SESSION['address'] = isset($_POST['address']) ? $_POST['address'] : '';
$_SESSION['uname'] = isset($_POST['uname']) ? $_POST['uname'] : '';
$_SESSION['pass'] = isset($_POST['pass']) ? $_POST['pass'] : '';
$_SESSION['cpass'] = isset($_POST['cpass']) ? $_POST['cpass'] : '';
$_SESSION['last_modified'] = date("d-m-Y H:i:s");


if (empty($_POST['fname'])) { $_SESSION['err_fname'] = "This field is empty"; }
if (empty($_POST['lname'])) { $_SESSION['err_lname'] = "This field is empty"; }
if (empty($_POST['gender'])) { $_SESSION['err_gender'] = "This field is empty"; }
if (empty($_POST['father_name'])) { $_SESSION['err_father_name'] = "This field is empty"; }
if (empty($_POST['mother_name'])) { $_SESSION['err_mother_name'] = "This field is empty"; }
if (empty($_POST['blood'])) { $_SESSION['err_blood'] = "This field is empty"; }
if (empty($_POST['religion'])) { $_SESSION['err_religion'] = "This field is empty"; }
if (empty($_POST['email'])) { $_SESSION['err_email'] = "This field is empty"; }
if (empty($_POST['mobile'])) { $_SESSION['err_mobile'] = "This field is empty"; }
if (empty($_POST['address'])) { $_SESSION['err_address'] = "This field is empty"; }
if (empty($_POST['uname'])) { $_SESSION['err_uname'] = "This field is empty"; }
if (empty($_POST['pass'])) { $_SESSION['err_pass'] = "This field is empty"; }
if (empty($_POST['cpass'])) { $_SESSION['err_cpass'] = "This field is empty"; }

if (!empty($_POST['pass']) && !empty($_POST['cpass'])) {
    if ($_POST['pass'] !== $_POST['cpass']) {
        $_SESSION['err_cpass'] = "Password does not match";
    }
}

$hasError = false;
foreach($_SESSION as $key => $val){
    if(strpos($key,'err_')===0){
        $hasError = true;
        break;
    }
}

if ($hasError) {
    header("Location: form_cookie.php");
    exit;
}

echo "<h2>Registration Successful</h2>";
session_unset();

header("Location: form_cookie.php");
exit;
?>
