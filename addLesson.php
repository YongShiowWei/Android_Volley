<?php
if(isset($_POST['unitID']) && isset($_POST['question1']) && isset($_POST['answer1']) && isset($_POST['quesImg1']) && isset($_POST['question2']) && isset($_POST['answer2']) && isset($_POST['quesImg2']) && isset($_POST['question3']) && isset($_POST['answer3']) && isset($_POST['quesImg3']) && isset($_POST['question4']) && isset($_POST['answer4']) && isset($_POST['quesImg4'])){
	require_once "conn.php";

	$unitID = $_POST['unitID'];
	$question1 = $_POST['question1'];
	$answer1 = $_POST['answer1'];
	$quesImg1 = $_POST['quesImg1'];
	$question2 = $_POST['question2'];
	$answer2 = $_POST['answer2'];
	$quesImg2 = $_POST['quesImg2'];
	$question3 = $_POST['question3'];
	$answer3 = $_POST['answer3'];
	$quesImg3 = $_POST['quesImg3'];
	$question4 = $_POST['question4'];
	$answer4 = $_POST['answer4'];
	$quesImg4 = $_POST['quesImg4'];

	 $filename1="IMG".rand().".jpg";
	   file_put_contents("images/".$filename1,base64_decode($quesImg1));
	 $filename2="IMG".rand().".jpg";
	   file_put_contents("images/".$filename2,base64_decode($quesImg2));
	 $filename3="IMG".rand().".jpg";
	   file_put_contents("images/".$filename3,base64_decode($quesImg3));
	 $filename4="IMG".rand().".jpg";
	   file_put_contents("images/".$filename4,base64_decode($quesImg4));

	$sql = "INSERT INTO lessons (lessonID, unitID, question1, answer1, quesImg1, question2, answer2, quesImg2, question3, answer3, quesImg3, question4, answer4, quesImg4) VALUES ('','$unitID','$question1','$answer1','$filename1', '$question2','$answer2','$filename2', '$question3','$answer3','$filename3','$question4','$answer4','$filename4')";

	if(!$conn->query($sql)){
		echo "Failure";
	}else{
		echo "Success";
	}
}
?>