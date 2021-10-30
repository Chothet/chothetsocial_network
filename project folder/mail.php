<?php
if(isset($_POST))
{
	$tomail=$_POST['tomail'];
	$frommail="From:".$_POST['frommail'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	mail($tomail, $subject, $message,$frommail);
}
?>