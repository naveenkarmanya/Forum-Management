

<?php

session_start();
$id = $_SESSION['email'];
$link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
$query1 = "select * from Forum where EmailAddress='$id'";
$result1 = mysqli_query($link, $query1);
$row = mysqli_fetch_row($result1);
$firstName = $row[0];
$lastName = $row[1];
$email = $row[2];
$mobileNumber = $row[4];
$addressLineOne = $row[5];
$addressLineTwo = $row[11];

$city = $row[6];
$state = $row[8];
$country = $row[7];
$zipcode = $row[9];


if (isset($_POST["adminEdit"])) {
    header("Location:admineditdeletefont.php");
}
if (isset($_POST["adminDelete"])) {
    $email = $_SESSION["email"];
    $deletequery = "delete from Forum where EmailAddress='$email'";
    $deleteresult = mysqli_query($link, $deletequery);
    if ($deleteresult) {
        $error = "Profile Successfully Deleted";
    }
}
?>