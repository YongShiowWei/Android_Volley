<?php
if(isset($_POST['unitName']) && isset($_POST['unitImg'])){
	require_once "conn.php";

	$unitName = $_POST['unitName'];
	$unitImg = $_POST['unitImg'];

	 $filename="IMG".rand().".jpg";
	   file_put_contents("images/".$filename,base64_decode($unitImg));

	$sql = "INSERT INTO units (id, name, image) VALUES ('','$unitName','$filename')";

	if(!$conn->query($sql)){
		echo "Failure";
	}else{
		echo "Success";
	}
}
?>