<?php
	
	require_once "conn.php";

	$stmt = $conn->prepare("SELECT leaderboardID, userID, score FROM leaderboard ORDER BY score DESC ");
	$stmt->execute();
	$stmt->bind_result($leaderboardID, $userID, $score);
	$unit = array();

	while($stmt->fetch()){
		$temp = array();
		$temp['leaderboardID'] = $leaderboardID;
		$temp['userID'] = $userID;
		$temp['score'] = $score;

		array_push($unit, $temp);
	}
	echo json_encode($unit);


?>