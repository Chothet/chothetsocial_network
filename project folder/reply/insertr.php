<?php
include('../db.php');
if(isset($_POST['reply']))
{
	$user_id=$_POST['user_id'];
	$post_id=$_POST['post_id'];
	$reply=$_POST['reply'];
	mysqli_query($conn,"INSERT INTO reply (reply,user_id,post_id) VALUES ('$reply','$user_id','$post_id')");

}

?>