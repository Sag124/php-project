<!DOCTYPE html>
<html lang="en">
<head>
	<title>Project</title>
	<link rel="icon" type="image/jpg" href="images/1.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

  <body>

    <div class="container">

      <form class="form-signin" action="welcome1.php" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputName" class="sr-only">UserName:</label>
        <input type="text" id="inputName" name="name" class="form-control" placeholder="UserName" required>
        <label for="inputEmail" class="sr-only">Email address:</label>
        <input type="email" id="inputEmail" name = "email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password:</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <label for="inputGender" class="sr-only">Gender:</label>
        <input type="text" id="inputGender" name="gender" class="form-control" placeholder="Gender">
        
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
