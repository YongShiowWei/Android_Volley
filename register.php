<?php

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    require_once "conn.php";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "insert into users values('$username','$email','$password')";

    if (!$conn->query($sql)) {
        echo "failure";
    } else {
        echo "success";
    }
}
?>