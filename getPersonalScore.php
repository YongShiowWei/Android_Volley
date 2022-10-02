<?php
	
	require_once "conn.php";

	$userID = $_POST['userID'];

	$stmt = $conn->prepare("SELECT leaderboardID, userID, score FROM leaderboard WHERE userID='$userID' ");

	$stmt->execute();
	$stmt->bind_result($leaderboardID, $userID, $score);
	$leaderboard = array();

	while($stmt->fetch()){
		$temp = array();
		$temp['leaderboardID'] = $leaderboardID;
		$temp['userID'] = $userID;
		$temp['score'] = $score;

		array_push($leaderboard, $temp);
	}
	echo json_encode($leaderboard);

?>