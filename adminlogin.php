<?php
if (isset($_POST['login1'])) {
    $email = $_POST['loginemail1'];
    $password = $_POST['loginpassword1'];

    $link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');

    $query1 = "select AdminId from Admin where Password='$password' and EmailAddress='$email'";

    $result1 = mysqli_query($link, $query1);

    $row = mysqli_fetch_array($result1);
    if (!$row) {
        $error = "Login Failed check the credentials ";
    } else {
        $_SESSION['id'] = $row['AdminId'];

        header("Location:adminloginsuccess.php");
    }
}
?>


</body>
</html>



