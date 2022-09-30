<?php
	require_once "conn.php";

	$quizID = $_POST['quizID'];

	$sql = "DELETE FROM quiz WHERE quizID='$quizID' ";

	if(!$conn->query($sql)){
		echo "Failure";
	}else{
		echo "Success";
	}
	
?>