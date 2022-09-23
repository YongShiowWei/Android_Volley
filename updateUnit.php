<?php
if(isset($_POST['unitID']) && isset($_POST['unitName']) && isset($_POST['unitImg'])){
	require_once "conn.php";

	$unitID = $_POST['unitID'];
	$unitName = $_POST['unitName'];
	$unitImg = $_POST['unitImg'];

 	$filename="IMG".rand().".jpg";
	   file_put_contents("images/".$filename,base64_decode($unitImg));

	$sql = "UPDATE units SET name='$unitName', image='$filename' WHERE id='$unitID' ";

	if(!$conn->query($sql)){
		echo "Failure";
	}else{
		echo "Success";
	}
}
?>