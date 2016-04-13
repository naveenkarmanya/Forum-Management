<?php

$link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
session_start();
$email = $_SESSION["email"];

$queryuser = "select * from Forum where EmailAddress='$email'";
$resultuser = mysqli_query($link, $queryuser);
$rowuser = mysqli_fetch_row($resultuser);
if ($rowuser) {

    $userFirstName = $rowuser[0];
    $userLastName = $rowuser[1];
    $userEmailAddress = $rowuser[2];
    $userMobileNumber = $rowuser[4];
    $userAddressOne = $rowuser[5];
    $userAddressTwo = $rowuser[11];
    $userCity = $rowuser[6];
    $userState = $rowuser[8];
    $userCountry = $rowuser[7];
    $userZipCode = $rowuser[9];
} else {
    $error = "Could not retrieve the details try again";
}

if (isset($_POST["adminEditFront"])) {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $emailAddress = $_POST["emailAddress"];
    $mobileNumber = $_POST["mobileNumber"];
    $addressOne = $_POST["addressLineOne"];
    $addressTwo = $_POST["addressLineTwo"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $zipcode = $_POST["zipcode"];

    $type = "User";
    $query = "update Forum set FirstName='$firstName', LastName='$lastName', EmailAddress='$emailAddress', MobileNumber='$mobileNumber', AddressOne='$addressOne', AddressTwo='$addressTwo', City='$city', State='$state', Country='$country', ZipCode='$zipcode' where EmailAddress='$email'";
    $result = mysqli_query($link, $query);
    if (!$result) {
        $error = "Error while registering Try ones again";
    } else {
        $message = $emailAddress . " Id is successfully Edited" . " <br>Please " . "<a href='adminviewedit.php'><h2>CLICK ME TO GO</h2></a>" . " View Page";
    }
}
?>