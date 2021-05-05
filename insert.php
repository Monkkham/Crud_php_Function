<?php
include_once('function.php');
$insertdata = new con_database();

if (isset($_POST['insert'])) {
	$nname = $_POST['name'];
	$llasname = $_POST['lastname'];
	$ppasword = $_POST['password'];

	$sql = $insertdata->insert($nname, $llasname, $ppasword);
	if ($sql) {
		echo "<script>alert('insert successfully')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}else{
		echo "<script>alert('insert something went wrong...')</script>";
		echo "<script>window.location.href='update.php'</script>";
	}
}


?>






<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>


<div class="containner">

<form action="" method="POST">
	<a href="index.php" class="btn btn-success">show</a>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="name" required="haha">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">lastname</label>
    <input type="text" class="form-control" name="lastname" required="stop">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" required>
  </div>
  <button type="submit" name="insert" class="btn btn-primary">Submit</button>
</form>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>