<?php

session_start();
$id = $_SESSION['id'];
$link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
$query1 = "select * from Forum where ForumId='$id'";
$result1 = mysqli_query($link, $query1);
$row = mysqli_fetch_row($result1);
$firstname = $row[0];
$lastname = $row[1];
$email = $row[2];
$mobile = $row[4];
$addressone = $row[5];
$addresstwo = $row[11];
$city = $row[6];
$state = $row[8];
$country = $row[7];
$zipcode = $row[9];

if (isset($_POST['editdone'])) {

    if ($_POST["editdone"] == "Done") {
        $editaddressone = $_POST['addrees'];
        $editaddresstwo = $_POST['addrees1'];
        $editstate = $_POST['state'];
        $editcity = $_POST['city'];
        $editzipcode = $_POST['zipcode'];
        $editcountry = $_POST['country'];
        $query2 = "update Forum set AddressOne='$editaddressone',AddressTwo='$editaddresstwo',State='$editstate',City='$editcity',ZipCode='$editzipcode',Country='$editcountry' where ForumId='$id'";
        $result2 = mysqli_query($link, $query2);

        if (!$result2) {
            $error = "There is an error  ";
        } else {
            $message = "successfully edited";
        }
    }
}
?>