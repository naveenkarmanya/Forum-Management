<?php

if (isset($_POST['logincheck'])) {
    $email = $_POST['loginemail'];
    $password = $_POST['loginpassword'];

    $link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');

    $query1 = "select ForumId,EmailAddress,Password from Forum where Password='$password' and EmailAddress='$email'";

    $result1 = mysqli_query($link, $query1);

    $row = mysqli_fetch_row($result1);
    if (!$row) {
        $error = "Login Failed check the credentials ";
    } else {
        $_SESSION['id'] = $row[0];

        header("Location:userloginsuccess.php");
    }
}
?>