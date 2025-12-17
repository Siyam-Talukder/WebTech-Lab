<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
<h1>Registration</h1>


<?php
echo isset($_SESSION['last_modified']) ? "<p>Last Modified: ".$_SESSION['last_modified']."</p>" : "<p>Last Modified: Never</p>";
?>


<form method="POST" action="form_cookie_data.php">
<table width="100%">
<tr>
<td>

<fieldset>
<legend>General Information</legend>
<table width="100%">

<tr>
<td><b>First Name:</b></td>
<td>
<input type="text" name="fname" value="<?= isset($_SESSION['fname']) ? $_SESSION['fname'] : '' ?>">
<?= isset($_SESSION['err_fname']) ? $_SESSION['err_fname'] : '' ?>
</td>
</tr>

<tr>
<td><b>Last Name:</b></td>
<td>
<input type="text" name="lname" value="<?= isset($_SESSION['lname']) ? $_SESSION['lname'] : '' ?>">
<?= isset($_SESSION['err_lname']) ? $_SESSION['err_lname'] : '' ?>
</td>
</tr>

<tr>
<td><b>Choose Gender:</b></td>
<td>
<input type="radio" name="gender" value="Male" <?= (isset($_SESSION['gender']) && $_SESSION['gender']=='Male') ? 'checked' : '' ?>> Male
<input type="radio" name="gender" value="Female" <?= (isset($_SESSION['gender']) && $_SESSION['gender']=='Female') ? 'checked' : '' ?>> Female
<?= isset($_SESSION['err_gender']) ? $_SESSION['err_gender'] : '' ?>
</td>
</tr>

<tr>
<td><b>Father's Name:</b></td>
<td>
<input type="text" name="father_name" value="<?= isset($_SESSION['father_name']) ? $_SESSION['father_name'] : '' ?>">
<?= isset($_SESSION['err_father_name']) ? $_SESSION['err_father_name'] : '' ?>
</td>
</tr>

<tr>
<td><b>Mother's Name:</b></td>
<td>
<input type="text" name="mother_name" value="<?= isset($_SESSION['mother_name']) ? $_SESSION['mother_name'] : '' ?>">
<?= isset($_SESSION['err_mother_name']) ? $_SESSION['err_mother_name'] : '' ?>
</td>
</tr>

<tr>
<td><b>Blood Group:</b></td>
<td>
<select name="blood">
<option value="">Select</option>
<option <?= (isset($_SESSION['blood']) && $_SESSION['blood']=='A+') ? 'selected' : '' ?>>A+</option>
<option <?= (isset($_SESSION['blood']) && $_SESSION['blood']=='B+') ? 'selected' : '' ?>>B+</option>
<option <?= (isset($_SESSION['blood']) && $_SESSION['blood']=='O-') ? 'selected' : '' ?>>O-</option>
</select>
<?= isset($_SESSION['err_blood']) ? $_SESSION['err_blood'] : '' ?>
</td>
</tr>

<tr>
<td><b>Religion:</b></td>
<td>
<select name="religion">
<option value="">Select</option>
<option <?= (isset($_SESSION['religion']) && $_SESSION['religion']=='Islam') ? 'selected' : '' ?>>Islam</option>
<option <?= (isset($_SESSION['religion']) && $_SESSION['religion']=='Hindu') ? 'selected' : '' ?>>Hindu</option>
<option <?= (isset($_SESSION['religion']) && $_SESSION['religion']=='Cristian') ? 'selected' : '' ?>>Cristian</option>
</select>
<?= isset($_SESSION['err_religion']) ? $_SESSION['err_religion'] : '' ?>
</td>
</tr>

</table>
</fieldset>

</td>

<td>
<fieldset>
<legend>Contact Information</legend>
<table width="100%">

<tr>
<td>Email:</td>
<td>
<input type="text" name="email" value="<?= isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>">
<?= isset($_SESSION['err_email']) ? $_SESSION['err_email'] : '' ?>
</td>
</tr>

<tr>
<td>Mobile:</td>
<td>
<input type="text" name="mobile" value="<?= isset($_SESSION['mobile']) ? $_SESSION['mobile'] : '' ?>">
<?= isset($_SESSION['err_mobile']) ? $_SESSION['err_mobile'] : '' ?>
</td>
</tr>

<tr>
<td>Address:</td>
<td>
<textarea name="address"><?= isset($_SESSION['address']) ? $_SESSION['address'] : '' ?></textarea>
<?= isset($_SESSION['err_address']) ? $_SESSION['err_address'] : '' ?>
</td>
</tr>

</table>
</fieldset>
</td>

<td>
<fieldset>
<legend>Login Info</legend>
<table width="100%">

<tr>
<td>Username:</td>
<td>
<input type="text" name="uname" value="<?= isset($_SESSION['uname']) ? $_SESSION['uname'] : '' ?>">
<?= isset($_SESSION['err_uname']) ? $_SESSION['err_uname'] : '' ?>
</td>
</tr>

<tr>
<td>Password:</td>
<td>
<input type="password" name="pass">
<?= isset($_SESSION['err_pass']) ? $_SESSION['err_pass'] : '' ?>
</td>
</tr>

<tr>
<td>Confirm Password:</td>
<td>
<input type="password" name="cpass">
<?= isset($_SESSION['err_cpass']) ? $_SESSION['err_cpass'] : '' ?>
</td>
</tr>

</table>
</fieldset>
</td>
</tr>
</table>

<input type="submit" value="Register" name="register">
<input type="submit" value="Save as Draft" name="save_as_draft">

</form>
</body>
</html>

<?php
// Clear session at the end
session_unset();
?>
