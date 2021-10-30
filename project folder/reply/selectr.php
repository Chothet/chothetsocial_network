<?php
session_start();
include('../db.php');
$sql=mysqli_query($conn,"SELECT reply.*,user.name,user.photo FROM reply INNER JOIN user ON reply.user_id=user.id WHERE reply.post_id='".$_SESSION['pid']."' ORDER BY reply.id DESC");
while($row=mysqli_fetch_assoc($sql))
{
	echo '<div class="media mb-2">
			  <div class="media-left">
			    <img src="img/'.$row['photo'].'" class="media-object rounded-circle m-2" style="width:35px">
			  </div>
			  <div class="media-body">
			  	<h6><b>'.$row['name'].'</b></h6>
			    <p class="text-secondary">'.$row['reply'].'</p>
			  </div>
			</div>';

} 

?>