<?php

$link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
session_start();
$email=$_SESSION["email"];

$queryuser="select * from forum where email='$email'";
$resultuser=mysqli_query($link,$queryuser);
$rowuser=mysqli_fetch_row($resultuser);
if($rowuser){
    
    $userFirstName=$rowuser[1];
    $userLastName=$rowuser[2];
    $userEmailAddress=$rowuser[3];
    $userMobileNumber=$rowuser[4];
    $userAddressOne=$rowuser[5];
    $userAddressTwo=$rowuser[6];
    $userCity=$rowuser[7];
    $userState=$rowuser[8];
    $userCountry=$rowuser[9];
    $userZipCode=$rowuser[10];
}
 else {
    $error="Could not retrieve the details try again";
}

if(isset($_POST["adminEditFront"])){
    
$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$emailAddress=$_POST["emailAddress"];
$mobileNumber=$_POST["mobileNumber"];
$addressOne=$_POST["addressLineOne"];
$addressTwo=$_POST["addressLineTwo"];
$city=$_POST["city"];
$state=$_POST["state"];
$country=$_POST["country"];
$zipcode=$_POST["zipcode"];

$type="User";
$query="update forum set firstname='$firstName', lastname='$lastName', email='$emailAddress', mobile='$mobileNumber', AddressOne='$addressOne', AddressTwo='$addressTwo', City='$city', State='$state', Country='$country', ZipCode='$zipcode' where email='$email'";
$result=mysqli_query($link,$query);
if(!$result){
    $error="Error while registering Try ones again";
}
else{
 $message=$emailAddress." Id is successfully Edited"; 
 
}
}


?>