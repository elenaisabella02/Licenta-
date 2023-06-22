<?php
  session_start();
  
  // Include database connectivity
    
  include_once('config.php');
  
  if (isset($_POST['submit'])) {
      $errorMsg = "";
      $username = $con->real_escape_string($_POST['username']);
      $password = $con->real_escape_string(md5($_POST['password']));
      
  if (!empty($username) || !empty($password)) {
        $query  = "SELECT * FROM users WHERE username = '$username'";
        $result = $con->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['name'];
            $_SESSION['USERNAME'] = $row['username'];
            // urmeaza logica pentru permisiuni in functie de rol
            $ok = 1;                           
        }else{
          $errorMsg = "Please insert Username and Password";
        } 
    }else{
      $errorMsg = "Username and Password is required";
    }
  }
?>