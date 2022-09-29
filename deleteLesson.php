<?php
	require_once "conn.php";

	$lessonID = $_POST['lessonID'];

	$sql = "DELETE FROM lessons WHERE lessonID='$lessonID' ";

	if(!$conn->query($sql)){
		echo "Failure";
	}else{
		echo "Success";
	}
	
?>