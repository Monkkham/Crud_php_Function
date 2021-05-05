<?php
include_once('function.php');

$updates = new con_database();

if (isset($_POST['update'])) {

	$id = $_GET['id'];
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];

	$sql = $updates->update($name, $lastname, $password, $id);

	if ($sql) {
		echo "<script>alert('update successfully...');</script>";
		echo "<script>window.location.href='index.php'</script>";
	}else{
		echo "<script>window.location.href='index.php'</script>";
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

	<?php
	$id = $_GET['id'];
	$update = new con_database();
	$sql = $update->showdata_update($id);

	while($row = mysqli_fetch_array($sql)) {
	?>



<form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" >
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Lastname</label>
    <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
  </div>
<?php } ?>
  <button type="submit" name="update" class="btn btn-primary">Submit</button>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>