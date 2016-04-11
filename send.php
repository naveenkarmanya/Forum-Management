<?php

$name = $_POST['name'];
$message = $_POST['msg'];
$tc = "naveen.goud@karmanya.co.in";
$subject = "hi dude";
$body = "jhfgsgfhdsghgfhksgfsk jhgfjskgkdsggs" . $message;
mail($tc, $subject, $body);
echo "successfully sent";
?>