<?php

session_start();
if (isset($_POST['logincheck'])) {
    $email = $_POST['loginemail'];
    $password = $_POST['loginpassword'];

    $link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');

    $query1 = "select email,password from forum where password='$password' and email='$email'";

    $result1 = mysqli_query($link, $query1);

    $row = mysqli_fetch_array($result1);
    if (!$row) {
        $error = "Login Failed check the credentials ";
    } else {
        $_SESSION['id'] = $row['forumid'];

        header("Location:userdashboard.php");
    }
}
?>