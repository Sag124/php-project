<?php 
require('config.php'); 
session_start();

  if(isset($_POST['user']))
  {
    $user = $_POST['user'];
    $pass = $_POST['pass']; 
    $_SESSION['Name'] = $_POST['user']; 

    $sql = "SELECT * FROM registrations WHERE Name = '$user' AND Password= '$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {

      require 'attach.php';
    }
    else
    {
      echo "Username or password is invalid";
    }
  }
  else
  {
    echo "Enter the form properly";
  }
?>

