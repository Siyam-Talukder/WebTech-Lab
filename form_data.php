<?php
	echo "<h1>General Information</h1>";
	echo "<ul>";
		echo "<li>".$_POST['fname']."</li>";
		echo "<li>".$_POST['lname']."</li>";
		echo "<li>".$_POST['Gender']."</li>";
		echo "<li>".$_POST['father_name']."</li>";
		echo "<li>".$_POST['mother_name']."</li>";
		echo "<li>".$_POST['blood']."</li>";
		echo "<li>".$_POST['religion']."</li>";
	echo "</ul>";

	echo "<h1>Contact Information</h1>";
	echo "<ul>";
		echo "<li>".$_POST['email']."</li>";
		echo "<li>".$_POST['mobile']."</li>";
		echo "<li>".$_POST['web']."</li>";
		echo "<li>".$_POST['country']."</li>";
		echo "<li>".$_POST['address']."</li>";
		echo "<li>".$_POST['city']."</li>";
		echo "<li>".$_POST['post']."</li>";
	echo "</ul>";

	echo "<h1>Account Information</h1>";
	echo "<ul>";
		echo "<li>".$_POST['uname']."</li>";
		echo "<li>".$_POST['pass']."</li>";
		echo "<li>".$_POST['cpass']."</li>";
	echo "</ul>";

?>