<?php

        require_once "conn.php";

        $email=$_POST['email'];

    $sql="SELECT username,email,password from users WHERE email ='$email'";
    $result = $conn->query($sql);

        $users($row = $result->fetch_assoc()){
        $temp = array();
	$temp["name"] = $row["name"];
	$temp["email"] = $row["email"];
	$temp["password"] = $row["password"];
        array_push($user,$temp);
        }
        echo json_encode($users);
    

?>
