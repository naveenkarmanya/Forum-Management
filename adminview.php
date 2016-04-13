

<?php

session_start();
$id = $_SESSION['email'];
$link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
$query1 = "select * from forum where email='$id'";
$result1 = mysqli_query($link, $query1);
$row = mysqli_fetch_row($result1);
$firstName = $row[0];
$lastName = $row[1];
$email = $row[2];
$mobileNumber = $row[5];
$addressLineOne = $row[6];
$addressLineTwo = $row[7];

$city = $row[8];
$state = $row[9];
$country = $row[10];
$zipcode = $row[11];


if (isset($_POST["adminEdit"])) {
    header("Location:admineditdeletefont.php");
}
if (isset($_POST["adminDelete"])) {
    $email = $_SESSION["email"];
    $deletequery = "delete from forum where email='$email'";
    $deleteresult = mysqli_query($link, $deletequery);
    if ($deleteresult) {
        $error = "Profile Successfully Deleted";
    }
}
?>