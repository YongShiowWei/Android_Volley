<?php
	
	require_once "conn.php";

	$stmt = $conn->prepare("SELECT id, name, image FROM units;");
	$stmt->execute();
	$stmt->bind_result($id, $name, $image);
	$unit = array();

	while($stmt->fetch()){
		$temp = array();
		$temp['id'] = $id;
		$temp['name'] = $name;
		$temp['image'] = $image;

		array_push($unit, $temp);
	}
	echo json_encode($unit);


?>