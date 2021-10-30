<!DOCTYPE html>
<html>
<head>
	<title>Cho Thet</title>
	<?php include('cdn.php'); ?>

<style type="text/css">
	.side_left li,.side_right li{
		background:#F7F7F7;
	}
	.react{
		display: flex;
	}
	.react div{
		width: 33%;
		text-align: center;
	}
</style>

</head>
<body >
<?php include ('nav.php'); ?>
<div class="container-fluid" style="margin-top: 80px;">
	<div class="row">

		<div class="col-md-2">
		</div>


		<div class="  pl-3" style="width:400px; background:#6699cc; margin:auto">
 <?php 
			  // $sql1=mysqli_query($conn,"SELECT * FROM students WHERE id!='".$_SESSION['id']."'");
 				 $sql1=mysqli_query($conn,"SELECT * FROM user");

			 while($row=mysqli_fetch_assoc($sql1)){

			  ?>


			<div class="col-md-3 ">
			<div class="alert" style="width: 360px;">
				  <img src="img/brand.png" style="width:30px; border-radius:50%">
				<hr class="" style="position:fixed"><i><b style="color:green;font-size: 40px;">All Friends</b></i>
				<span class="badge badge-info">
			   <?php 
			  $sql1=mysqli_query($conn,"SELECT * FROM user");
			  echo mysqli_num_rows($sql1);
			  ?>	
			  </span>
			  </hr>
				 <?php 
			  // $sql1=mysqli_query($conn,"SELECT * FROM students WHERE id!='".$_SESSION['id']."'");
			   $sql1=mysqli_query($conn,"SELECT * FROM user");
			 while($row=mysqli_fetch_assoc($sql1)){

			  ?>
				
			
			<div class="media border mb-2">
				
			  <div class="media-left">
			    <img src="img/<?php echo $row['photo']; ?>" class="media-object rounded-circle m-2" style="width:60px">
			  </div>
			  <div class="media-body">
			    <h4 class="media-heading mt-3"><i><b style="color:blue;font-size:"><?php echo $row['name']; ?></b></i></h4>
			   <!--  <p><small>Student ID: <?php echo $row['id']; ?></small></p>
			     <p class="float-right"><small>Department Ph No</small></p> -->
			    
			  </div>
				</div>

		<?php } }?>


			</div>
		</div>
	</div>
			  
</div>

	
</script>
</body>
</html>