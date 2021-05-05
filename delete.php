<?php

include_once('function.php');

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$deletedata = new con_database();
	$sql = $deletedata->delete($id);

	if ($sql) {
		echo "<script>alert('deletee successfully')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
}

?>