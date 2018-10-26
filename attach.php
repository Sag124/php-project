<!DOCTYPE html>
<html>
<body>
<head>
	<title>Project</title>
	<link rel="icon" type="image/jpg" href="images/1.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style type="text/css">
  		h1{
  			text-align: center;
  			color: yellow;
  		}
  	</style>

</head>
  <body>
  <br>
  <br>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="welcome1.php">Project Igenero</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
           <!--  <li>
        <a href="logout.php" class="btn btn-info btn-sm">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
      </li> -->
      <li><a href="logout.php">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Welcome <?php echo $_POST["user"];  ?></h1>
      
<?php
  $data = [];
		$sql = "SELECT * FROM registrations";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
    $data[] = $row;
		//echo "Id: " . $row["id"] . "&nbsp" . "&nbsp" ."Name: " . $row["Name"] . "&nbsp" ."&nbsp" . "Email:" . $row["Email"] . "&nbsp" . "&nbsp" ."<br>";
	}
}
?>
<!--
<div class="col-md-12">ss 

Data = <?php print_r($data); ?> -->
<h2 class="sub-header">Database Records</h2>
<div class="table-responsive"> 
<table class="table table-striped">
<thead>
  <tr>
    <td>id</td>
    <td>name</td>
    <td>email</td>
    <td>password</td>
  </tr>
</thead>
<tbody>
<?php foreach($data as $d){ ?>
  <tr>
    <td><?php echo $d['id']; ?></td>
    <td><?php echo $d['Name']; ?></td>
    <td><?php echo $d['email'];  ?></td>
    <td><?php echo $d['Password']; ?></td>
  </tr>
<?php } ?>  
</tbody>
</table>
</div>

      

</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
