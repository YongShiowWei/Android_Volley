<?php
	
	require_once "conn.php";

	$quizID = $_POST['quizID'];

	$stmt = $conn->prepare("SELECT quizID, quizLevel, question1, correctAns1, wrongAns1_1, wrongAns1_2, wrongAns1_3, 
        question2, correctAns2, wrongAns2_1, wrongAns2_2, wrongAns2_3,
        question3, correctAns3, wrongAns3_1, wrongAns3_2, wrongAns3_3,
        question4, correctAns4, wrongAns4_1, wrongAns4_2, wrongAns4_3 FROM quiz WHERE quizID='$quizID' ");

	$stmt->execute();
	$stmt->bind_result($quizID, $quizLevel, $question1, $correctAns1, $wrongAns1_1, $wrongAns1_2, $wrongAns1_3, 
    $question2, $correctAns2, $wrongAns2_1, $wrongAns2_2, $wrongAns2_3,
    $question3, $correctAns3, $wrongAns3_1, $wrongAns3_2, $wrongAns3_3,
    $question4, $correctAns4, $wrongAns4_1, $wrongAns4_2, $wrongAns4_3,);
	$quizQuestion = array();

	while($stmt->fetch()){
		$temp = array();
		$temp['quizID'] = $quizID;
        $temp['quizLevel'] = $quizLevel;
		$temp['question1'] = $question1;
		$temp['correctAns1'] = $correctAns1;
		$temp['wrongAns1_1'] = $wrongAns1_1;
		$temp['wrongAns1_2'] = $wrongAns1_2;
		$temp['wrongAns1_3'] = $wrongAns1_3;
		$temp['question2'] = $question2;
		$temp['correctAns2'] = $correctAns2;
		$temp['wrongAns2_1'] = $wrongAns2_1;
		$temp['wrongAns2_2'] = $wrongAns2_2;
		$temp['wrongAns2_3'] = $wrongAns2_3;
        $temp['question3'] = $question3;
		$temp['correctAns3'] = $correctAns3;
		$temp['wrongAns3_1'] = $wrongAns3_1;
		$temp['wrongAns3_2'] = $wrongAns3_2;
		$temp['wrongAns3_3'] = $wrongAns3_3;
        $temp['question4'] = $question4;
		$temp['correctAns4'] = $correctAns4;
		$temp['wrongAns4_1'] = $wrongAns4_1;
		$temp['wrongAns4_2'] = $wrongAns4_2;
		$temp['wrongAns4_3'] = $wrongAns4_3;

		array_push($quizQuestion, $temp);
	}
	echo json_encode($quizQuestion);

?>