<!DOCTYPE html>
<html>
<head>
	<title>showdata</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>


<table id="mytable" class="table table-bodered table-striped">
	<a href="insert.php" class="btn btn-success">insert</a>
	<thead>
		<th>iໄ</th>
		<th>name</th>
		<th>lastname</th>
		<th>password</th>
		<th>Edit</th>
		<th>delete</th>
	</thead>

<tbody>
	
	<?php

	include_once('function.php');
	$showdata = new con_database();
	$sql = $showdata->showdata();
	while($row = mysqli_fetch_array($sql)){
	
	?>

	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['lastname']; ?></td>
		<td><?php echo $row['password']; ?></td>
		<td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">ແກ້ໄຂ</a></td>
		<td><a href="delete.php?id=<?php echo $row['id']; ?>"  class="btn btn-danger" >ລົບຂໍ້ມູນ</a></td>
	</tr>
	<?php

}

?>



</tbody>

</table>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
	
</script>
</body>
</html>