<!DOCTYPE html>
<html>
<head>
	<title>Shaung Kaw</title>
	<style type="text/css">
	.comment_box{
	border:none;
    resize: none;
    width: 98%;
  	height: 34px;
    outline:none;
    padding:5px 15px;
	}
	.comment_area{
		height: 300px;
		overflow-y: scroll;
	}
	.comment_area::-webkit-scrollbar {
    display: none;
}



	</style>
	<?php include('cdn.php'); ?>

</head>
<body style="background:#E9EBEE;">
<?php include ('nav.php'); ?>

<div class="container-fluid" style="margin-top: 80px;">
	<div class="row  ">
		<div class="col-md-2"></div>
		<div class="col-md-5">
<?php
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$_SESSION['pid']=$id;
		$sql=mysqli_query($conn,"SELECT post.*,user.name,user.photo FROM post INNER JOIN user ON post.user_id=user.id WHERE post.id='$id'");
		$row=mysqli_fetch_assoc($sql);
	}
?>
			<div class="card">
				<div class="card-header bg-info">			
					<img src="img/<?php echo $row['photo']; ?>" width="30px" class="rounded-circle mr-1">
					<b><?php echo $row['name']; ?></b>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>				
				</div>
				<div class="card-body">
					<h6><?php echo $row['title']; ?></h6>
					<p class="text-justify"><?php echo $row['description']; ?></p>
					<?php if($row['post_photo']){ ?>
					<img src="img/<?php echo $row['post_photo']; ?>" width="100%;">
					<?php } ?>
				</div>
			</div>


		</div>
		<div class="col-md-3 ">
			
			<div class="card scroll">
				<div class="card-body" style="background:#66CCff">
					<div class="comment_area" >



					</div>

					<div class="media pt-2 px-3 border-top">
  					<img src="img/<?php echo $row['photo']; ?>" width="35px" class="rounded-circle">
  					<div class="media-body ">
  						<input type="hidden" class="post_id" value="<?php echo $id; ?>">
  						<input type="hidden" class="user_id" value="<?php echo $_SESSION['id']; ?>">
    					<input class="comment_box ml-2 comment" placeholder="Write  comment you want..."><button type="button" class="btn btn-info answer" style="float:right"><i>Ment</i></button></input>

  					</div>
				</div>

				</div>
			</div>

		</div>
	</div>
</div>

<script type="text/javascript">
	$('.comment').change(function(){
		var post_id=$('.post_id').val();
		var user_id=$('.user_id').val();
		var comment=$('.comment').val();
		$.ajax({
			url:"comment/insert.php",
			type:"POST",
			data:{post_id,user_id,comment},
			success:function(data)
			{
				$('.comment').val("");

			}
		});
	});

	$(document).ready(function(){
		$('.comment_area').load('comment/select.php');
		commentRefresh();
	});

	function commentRefresh()
	{
		setTimeout(function(){
			$('.comment_area').load('comment/select.php');
			commentRefresh();
		},1000);
	}
</script>

</body>
</html>