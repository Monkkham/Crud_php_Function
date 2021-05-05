<?php

define('server', 'localhost');
define('user', 'root');
define('password', '');
define('database', 'cw1');

//check connect database 
class con_database {
	function __construct(){
		$connect = mysqli_connect(server,user,password,database);
		$this->con_database = $connect;

		if (mysqli_connect_errno()) {
			echo "Can not connect : " . mysqli_connect_error();
		}else{
			echo "";
		}
	}


//function insert data to database
public function insert($Name,	$Lastname,	$Password){
	$result = mysqli_query($this->con_database, "INSERT INTO inserts (name,	lastname,	password) VALUES ('$Name','$Lastname','$Password')");
	return $result;
}


//function show data from database
public function showdata() {
	$result = mysqli_query($this->con_database, "SELECT *FROM inserts");
	return $result;
}


//function show data for update
public function showdata_update($id){
	$result = mysqli_query($this->con_database, "SELECT *FROM inserts WHERE id = '$id'
		");
	return $result;
}


//function update data in database
public function update($name, $lastname, $password, $id) {
$result = mysqli_query($this->con_database, "UPDATE inserts SET 
	name = '$name',
 lastname = '$lastname',
  password = '$password'
   WHERE id = '$id' 
   ");
	return $result;
}


//function delete data
public function delete($id){
	$delete = mysqli_query($this->con_database, "DELETE FROM inserts WHERE id = '$id'");
	return $delete;
}

}
?>