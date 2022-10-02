<?php

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['sessionEmail'])) {
    require_once "conn.php";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $sessionEmail = $_POST['sessionEmail'];

    $sql = "update users set username='$username',email='$email' where email='$sessionEmail'";

    if (!$conn->query($sql)) {
        echo "failure";
    } else {
        echo "success";
    }
}
?>