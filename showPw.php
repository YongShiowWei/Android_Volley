<?php
    require_once "conn.php";

    $email=$_POST['email'];

    $sql="SELECT password from users WHERE email ='$email'";
    $result = $conn->query($sql);

        $users = array();
        while($row = $result->fetch_assoc()){
        $temp = array();
	$temp["password"] = $row["password"];
        array_push($users,$temp);
        }
        echo json_encode($users);
?>