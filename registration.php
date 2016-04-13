<?php

session_start();
if ($_GET['logput'] == 1) {
    session_destroy();
}
if (isset($_POST['signup'])) {

    if ($_POST["signup"] == "Sign Up") {
        $first = $_POST['firstname'];
        $last = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobile = $_POST['mobile'];


        $link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');

        if (!($_POST["email"] == "" && !($_POST["password"]))) {
            $queryselect = "select * from forum where email='$email' and password='$password'";
            $resultselect = mysqli_query($link, $queryselect);
            $values = mysqli_fetch_array($resultselect);

            if ($values) {
                $error = "email already registered";
            } else {
                $query = "insert into forum(firstname,lastname,email,password,mobile) values('$first','$last','$email','$password','$mobile')";
                $result = mysqli_query($link, $query);
            }
        } else {
            $error = "Please enter Email and password to sign Up";
        }

        if (!isset($error)) {
            $_SESSION['email'] = $email;
            header("Location:registrationsuccess.php");
        }
    }
}
?>

