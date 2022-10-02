<?php
if(isset($_POST['userID']) && isset($_POST['score'])){
	require_once "conn.php";

	$userID = $_POST['userID'];
	$score = $_POST['score'];

	$sql = "INSERT INTO leaderboard (leaderboardID, userID, score) VALUES ('','$userID','$score')";

	if(!$conn->query($sql)){
		echo "Failure";
	}else{
		echo "Success";
	}
}
?>