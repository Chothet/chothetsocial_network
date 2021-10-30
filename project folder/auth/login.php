<?php
session_start();
include('../db.php');
if(isset($_POST))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$sql=mysqli_query($conn,"SELECT * FROM user WHERE name='$name' AND password='$password'");
	$row=mysqli_fetch_assoc($sql);

	if(mysqli_num_rows($sql)>0)
	{
		$_SESSION['id']=$row['id'];
		$sql1=mysqli_query($conn,"SELECT * FROM online_user WHERE user_id='".$_SESSION['id']."'");
		if(mysqli_num_rows($sql1)<=3)
		{
			$status=1;
			while($row=mysqli_fetch_assoc($sql1))
			{
				if($row['status']!=1)
				{
					$status=1;
				}else if($row['status']!=2)
				{
					$status=2;
				}else if($row['status']!=3)
				{
					$status=3;
				}
				
			}
		}else{
			echo "<script>alert('Account Limited!, Plz Logout some account!');window.location.href='../index.php'</script>";
		}
		$_SESSION['status']=$status;
		mysqli_query($conn,"INSERT INTO online_user (user_id,active_date,status) VALUES ('".$_SESSION['id']."',now(),'$status')");
		header("location:../home.php");
	// }else if($name=admin && $password=12345){
	// 	echo "<script>alert('Admin Password is correct, please check in');window.location.href='../home.php'</script>";
	}else {
		echo "<script>alert('Password is incorrect.Login Failed.');window.location.href='../index.php'</script>";
	}
}
?>