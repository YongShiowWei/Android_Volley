<?php

if (isset($_POST['password'])) {
    require_once "conn.php";

    $sessionEmail = $_POST['sessionEmail'];
    $password = $_POST['password'];

    $sql = "update users set password='$password' where email='$sessionEmail'";

    if (!$conn->query($sql)) {
        echo "failure";
    } else {
        echo "success";
    }
}
?>
