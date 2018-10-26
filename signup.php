            <?php
      include 'config.php';
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $gender = $_POST['gender'];


      $sql = "INSERT INTO registrations (Name, Password, email, gender) VALUES ('$name' ,'$password','$email','$gender')";
      $result = $conn->query($sql);
      if ($result == TRUE) {
        echo "You are successfully registered for this website." . "<br>" . "Please log in for new updates. ";

      }
      else
      {
        echo "Not a successfull registration";
      }
      ?>    

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="main.php">Continue :)</a>
</body>
</html>