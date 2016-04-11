

<?php

$id = $_SESSION['id'];
$link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
$query1 = "select * from forum where forumid='$id'";
$result1 = mysqli_query($link, $query1);
$row = mysqli_fetch_row($result1);
$firstname1 = $row[0];
$lastname1 = $row[1];
$email1 = $row[2];
$mobile1 = $row[5];
$addressone1 = $row[6];
$addresstwo1 = $row[7];
$city1 = $row[8];
$state1 = $row[9];
$country1 = $row[10];
$zipcode1 = $row[11];
?>

