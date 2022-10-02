<?php
if(isset($_POST['email']) && isset($_POST['password'])){
	require_once "conn.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "select * from users where email='$email' and password='$password'";
	$result = $conn->query($sql);

	if($result->num_rows>0){
		echo "success";
	}else{
		echo "failure";
	}
}
?>
