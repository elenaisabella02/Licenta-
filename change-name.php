<?php
 include_once('loginlogic.php');
	
	$new_name = $_POST['name'];
	$new_username = $_POST['username'];
	$cred_query = $con->query("SELECT * FROM users WHERE username = '".$_SESSION['USERNAME']."'");
	// $password_row = mysql_fetch_array($password_query);
    $cred_row = $cred_query->fetch_assoc();
	$database_cred = $cred_row['name'];
    $database_cred2 = $cred_row['username'];
	if ($new_name != $_SESSION['NAME'] && $new_username != $_SESSION['USERNAME'])
		{
		
			$update_name = $con->query("UPDATE users SET name='$new_name' WHERE username = '".$_SESSION['USERNAME']."'");
			$update_name = $con->query("UPDATE users SET username='$new_username' WHERE username = '".$_SESSION['USERNAME']."'");
            // echo "<script>alert('Update Sucessfully');</script> ";
            header("Location:index.php");
			}
            else
            {
                echo "Please use a new name and username";
            }
	 

 
?>