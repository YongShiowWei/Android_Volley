<?php
if(isset($_POST['quizLevel']) && isset($_POST['question1']) && isset($_POST['correctAns1']) && isset($_POST['wrongAns1_1']) && isset($_POST['wrongAns1_2']) && isset($_POST['wrongAns1_3']) && 
    isset($_POST['question2']) && isset($_POST['correctAns2']) && isset($_POST['wrongAns2_1']) && isset($_POST['wrongAns2_2']) && isset($_POST['wrongAns2_3']) && 
    isset($_POST['question3']) && isset($_POST['correctAns3']) && isset($_POST['wrongAns3_1']) && isset($_POST['wrongAns3_2']) && isset($_POST['wrongAns3_3']) &&
    isset($_POST['question4']) && isset($_POST['correctAns4']) && isset($_POST['wrongAns4_1']) && isset($_POST['wrongAns4_2']) && isset($_POST['wrongAns4_3']) ){
	require_once "conn.php";

	$quizLevel = $_POST['quizLevel'];
	$question1 = $_POST['question1'];
	$correctAns1 = $_POST['correctAns1'];
	$wrongAns1_1 = $_POST['wrongAns1_1'];
	$wrongAns1_2 = $_POST['wrongAns1_2'];
	$wrongAns1_3 = $_POST['wrongAns1_3'];
    $question2 = $_POST['question2'];
	$correctAns2 = $_POST['correctAns2'];
	$wrongAns2_1 = $_POST['wrongAns2_1'];
	$wrongAns2_2 = $_POST['wrongAns2_2'];
	$wrongAns2_3 = $_POST['wrongAns2_3'];
    $question3 = $_POST['question3'];
	$correctAns3 = $_POST['correctAns3'];
	$wrongAns3_1 = $_POST['wrongAns3_1'];
	$wrongAns3_2 = $_POST['wrongAns3_2'];
	$wrongAns3_3 = $_POST['wrongAns3_3'];
    $question4 = $_POST['question4'];
	$correctAns4 = $_POST['correctAns4'];
	$wrongAns4_1 = $_POST['wrongAns4_1'];
	$wrongAns4_2 = $_POST['wrongAns4_2'];
	$wrongAns4_3 = $_POST['wrongAns4_3'];

	$sql = "INSERT INTO quiz (quizID, quizLevel, question1, correctAns1, wrongAns1_1, wrongAns1_2, wrongAns1_3, 
     question2, correctAns2, wrongAns2_1, wrongAns2_2, wrongAns2_3, 
     question3, correctAns3, wrongAns3_1, wrongAns3_2, wrongAns3_3, 
     question4, correctAns4, wrongAns4_1, wrongAns4_2, wrongAns4_3 ) 
     VALUES ('','$quizLevel','$question1','$correctAns1','$wrongAns1_1', '$wrongAns1_2','$wrongAns1_3',
     '$question2','$correctAns2','$wrongAns2_1', '$wrongAns2_2','$wrongAns2_3',
     '$question3','$correctAns3','$wrongAns3_1', '$wrongAns3_2','$wrongAns3_3',
     '$question4','$correctAns4','$wrongAns4_1', '$wrongAns4_2','$wrongAns4_3')";

	if(!$conn->query($sql)){
		echo "Failure";
	}else{
		echo "Success";
	}
}
?>