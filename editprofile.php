<?php

session_start();
$id = $_SESSION['id'];
$link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
$query1 = "select * from forum where forumid='$id'";
$result1 = mysqli_query($link, $query1);
$row = mysqli_fetch_row($result1);
$firstname = $row[0];
$lastname = $row[1];
$email = $row[2];
$mobile = $row[5];
$addressone = $row[6];
$addresstwo = $row[7];
$city = $row[8];
$state = $row[9];
$country = $row[10];
$zipcode = $row[11];

if (isset($_POST['editdone'])) {

    if ($_POST["editdone"] == "Done") {
        $editaddressone = $_POST['addrees'];
        $editaddresstwo = $_POST['addrees1'];
        $editstate = $_POST['state'];
        $editcity = $_POST['city'];
        $editzipcode = $_POST['zipcode'];
        $editcountry = $_POST['country'];
        $query2 = "update forum set AddressOne='$editaddressone',AddressTwo='$editaddresstwo',State='$editstate',City='$editcity',ZipCode='$editzipcode',Country='$editcountry' where forumid='$id'";
        $result2 = mysqli_query($link, $query2);

        if (!$result2) {
            echo "There is an error  ";
        } else {
            echo "successfully edited";
        }
    }
}
?>