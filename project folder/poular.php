<?php
include('db.php');
$sql6=mysqli_query($conn,"SELECT post_id FROM like_data");
$a="";
while($popular=mysqli_fetch_assoc($sql6))
{
	$a.=$popular['post_id'].",";
}
$b=substr($a,0,-1);
$c=explode(",", $b);
$d=array_count_values($c);
arsort($d);
foreach ($d as $key => $value) {
	$sql7=mysqli_query($conn,"SELECT post.title,user.name,user.photo FROM post INNER JOIN user ON post.user_id=user.id WHERE post.id='$key'");
	$popular1=mysqli_fetch_assoc($sql7);
	echo $popular1['title']."<br>";
}

?>