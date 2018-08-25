<?php
$from=$_POST['name'];
$email=$_POST['email'];
$comments=$_POST['comments'];
// the message
$msg = "Mail from : '$from'\n\n'$comments'";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
mail("webpaper73@gmail.com","Review",$msg);
header("Location: about.html");
?>