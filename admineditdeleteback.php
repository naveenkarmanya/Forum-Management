<?php

$link = mysqli_connect('localhost', 'dbuser', '123', 'userdata');
session_start();
$email=$_SESSION["email"];

$queryuser="select * from forum where email='$email'";
$resultuser=mysqli_query($link,$queryuser);
$rowuser=mysqli_fetch_row($resultuser);
if($rowuser){
    
    $userFirstName=$rowuser[0];
    $userLastName=$rowuser[1];
    $userEmailAddress=$rowuser[2];
    $userMobileNumber=$rowuser[5];
    $userAddressOne=$rowuser[6];
    $userAddressTwo=$rowuser[7];
    $userCity=$rowuser[8];
    $userState=$rowuser[9];
    $userCountry=$rowuser[10];
    $userZipCode=$rowuser[11];
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
 $message=$emailAddress." Id is successfully Edited"." <br>Please "."<a href='adminviewedit.php'><h2>CLICK ME TO GO</h2></a>"." View Page"; 
 
}
}


?>