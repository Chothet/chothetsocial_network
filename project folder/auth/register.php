<?php
include('../db.php');

if(isset($_POST))
{
	$name=$_POST['name'];
	
	$phone=$_POST['phone'];
	$password = $_POST['password'];
	
	// $hash_password=hash('md5', $password);
	$gender=$_POST['gender'];
	$photo=$_FILES['photo']['name'];
	$tmp=$_FILES['photo']['tmp_name'];
	if($photo=="")
	{
		$photo="empty.png";
	}

	if($photo)
	{
		move_uploaded_file($tmp,"../img/$photo");
	}
	
	$sql=mysqli_query($conn,"SELECT * FROM user WHERE name='$name'");
	if(mysqli_num_rows($sql)>0)
	{
		echo "<script>alert('Username already exist');window.location.href='../index.php'</script>";
	}else {
		$sql="INSERT INTO user (name,phone,password,gender,photo) VALUES ('$name','$phone','$password','$gender','$photo')";
		mysqli_query($conn,$sql);

		echo "<script>alert('Successfully Registred,go to Cho Thet Social Network');window.location.href='../rindex.php'</script>";
	}
}
?>