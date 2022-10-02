<?php

        require_once "conn.php";

        $email = $_POST['email'];

    $result = $conn->prepare("SELECT username, email, password FROM users WHERE email ='$email'");
    $result->execute();
	$result->bind_result($username, $email, $password);
	$user = array();

        while($result->fetch()){
                $temp = array();
	        $temp['username'] = $username;
	        $temp['email'] = $email;
	        $temp['password'] = $password;

                array_push($user,$temp);
        }
        echo json_encode($user);
    
?>
