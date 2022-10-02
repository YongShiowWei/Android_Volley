<?php
if(isset($_POST['email']) && isset($_POST['password'])){
	require_once "conn.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql="SELECT id,email,password from users WHERE email ='$email' and password = '$password' ";

	$result = $conn->query($sql);
	$user = array();

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
			echo $row["id"];
		}
	}else{
		echo "Failure";
	}
}
?>