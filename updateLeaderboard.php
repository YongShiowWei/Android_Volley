<?php
if(isset($_POST['userID']) && isset($_POST['score'])){
	require_once "conn.php";

    $userID = $_POST['userID'];
	$score = $_POST['score'];

	$sql = "UPDATE leaderboard SET score='$score' WHERE userID='$userID' ";

	if(!$conn->query($sql)){
		echo "Failure";
	}else{
		echo "Success";
	}
}
?>