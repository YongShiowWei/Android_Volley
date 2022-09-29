<?php
	
	require_once "conn.php";

	$lessonID = $_POST['lessonID'];

	$stmt = $conn->prepare("SELECT lessonID, question1, answer1, quesImg1, question2, answer2, quesImg2, question3, answer3, quesImg3, question4, answer4, quesImg4 FROM lessons WHERE lessonID='$lessonID' ");

	$stmt->execute();
	$stmt->bind_result($lessonID, $question1, $answer1, $quesImg1, $question2, $answer2, $quesImg2, $question3, $answer3, $quesImg3, $question4, $answer4, $quesImg4);
	$lessonQuestion = array();

	while($stmt->fetch()){
		$temp = array();
		$temp['lessonID'] = $lessonID;
		$temp['question1'] = $question1;
		$temp['answer1'] = $answer1;
		$temp['quesImg1'] = $quesImg1;
		$temp['question2'] = $question2;
		$temp['answer2'] = $answer2;
		$temp['quesImg2'] = $quesImg2;
		$temp['question3'] = $question3;
		$temp['answer3'] = $answer3;
		$temp['quesImg3'] = $quesImg3;
		$temp['question4'] = $question4;
		$temp['answer4'] = $answer4;
		$temp['quesImg4'] = $quesImg4;

		array_push($lessonQuestion, $temp);
	}
	echo json_encode($lessonQuestion);

?>