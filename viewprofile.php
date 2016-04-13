

<?php

$id = $_SESSION['id'];
$link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
$query1 = "select * from Forum where ForumId='$id'";
$result1 = mysqli_query($link, $query1);
$row = mysqli_fetch_row($result1);
$firstname1 = $row[0];
$lastname1 = $row[1];
$email1 = $row[2];
$mobile1 = $row[4];
$addressone1 = $row[5];
$addresstwo1 = $row[11];
$city1 = $row[6];
$state1 = $row[8];
$country1 = $row[7];
$zipcode1 = $row[9];
?>

