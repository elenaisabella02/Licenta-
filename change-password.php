<?php
 include_once('loginlogic.php');

if (isset($_POST['re_pass']))
	{
 
	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$re_pass = $_POST['re_pass'];
	$password_query = $con->query("SELECT * FROM users WHERE username = '".$_SESSION['USERNAME']."'");
	// $password_row = mysql_fetch_array($password_query);
    $password_row = $password_query->fetch_assoc();
	$database_password = $password_row['password'];
	if ($database_password == md5($old_pass))
		{
		if ($new_pass == $re_pass)
			{
			$update_pwd = $con->query("UPDATE users SET password='$new_pass' WHERE username = '".$_SESSION['username']."'");
			// echo "<script>alert('Update Sucessfully');</script> ";
            header("Location:index.php");
			}
		  else
			{
			echo "Your new and Retype Password is not match";
			}
		}
	  else
		{
		echo "Your old password is wrong";
		}
	}
 
?>