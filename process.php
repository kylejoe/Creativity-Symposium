<html>
<body>


<?php 

session_start();

$to="halterman.kyle@gmail.com";
// $name=$_POST['name']; don't need this when sending email
$from=$_POST['email']; //will switch this to post variable this is TEST
$subject=$_POST['subject'];
$comments=$_POST['comments'];

$headers = "This message is from $from";

mail($to, $subject, $comments, $headers);



if (isset($_POST['submit']))
{
	$_SESSION['success'] = "Your email has been sent thank you";
	header('location: contact.php');
	die();
}




?>