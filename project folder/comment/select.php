<?php
session_start();
include('../db.php');
$sql=mysqli_query($conn,"SELECT comment.*,user.name,user.photo FROM comment INNER JOIN user ON comment.user_id=user.id WHERE comment.post_id='".$_SESSION['pid']."' ORDER BY comment.id DESC");
while($row=mysqli_fetch_assoc($sql))
{
	echo '<div class="media mb-2">
			  <div class="media-left">
			    <img src="img/'.$row['photo'].'" class="media-object rounded-circle m-2" style="width:35px">
			  </div>
			  <div class="media-body">
			  	<h6><b>'.$row['name'].'</b></h6>
			    <p class="text-secondary">'.$row['comment'].'</p>
			  </div>
			</div>';

} 

?>