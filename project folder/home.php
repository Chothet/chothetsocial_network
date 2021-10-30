<!DOCTYPE html>
<html>

<head>
    <title>Cho Thet</title>
    <?php include('cdn.php'); ?>

    <style type="text/css">
    .side_left li,
    .side_right li {
        background: #F7F7F7;
    }

    .react {
        display: flex;
    }

    .react div {
        width: 33%;
        text-align: center;
    }

    body {
        font-family: Times New Romance;
    }
    </style>

</head>

<body style="background:#E9EBEE;">
    <?php include ('nav.php'); ?>
    <div class="container-fluid" style="margin-top: 80px;">
        <div class="row">

            <div class="col-md-2">
                <ul class="list-group side_left position-fixed" style="width: 223px;">
                    <li class="list-group-item bg-info"><a href="home.php" class="card-link text-dark"><i
                                class="fas fa-home"></i> NewFeeds</a></li>
                    <li class="list-group-item"><a href="home.php" class="card-link text-dark"><i
                                class="fas fa-clipboard-list" style="font-size:20px;color:#CC6600;margin-left: 0px"></i>
                            All Posts <span class="badge badge-info">
                                <?php 
			  $sql1=mysqli_query($conn,"SELECT * FROM post");
			  echo mysqli_num_rows($sql1);
			  ?>
                            </span></a></li>
                    <li class="list-group-item"><a href="home.php?id=<?php echo $_SESSION['id']; ?>"
                            class="card-link text-dark"><i class="fas fa-server"
                                style="font-size:20px;color:#CC6600;margin-left: 0px"></i> Own Posts
                            <span class="badge badge-info">
                                <?php 
			  $sql1=mysqli_query($conn,"SELECT * FROM post WHERE user_id='".$_SESSION['id']."'");
			  echo mysqli_num_rows($sql1);
			  ?>
                            </span></a></li>
                    <li class="list-group-item" data-toggle="modal" data-target="#popular_modal">
                        <i class="nav-link  fas fa-user-friends "
                            style="font-size:20px;color:#CC6600;display:inline-block;padding-left: 0px"></i>Popular
                        Friends
                    </li>
                    <li class="list-group-item">

                        <a class="dropdown-item" href="auth/logout.php" style="color:red">Logout</a>

                    </li>

                </ul>
            </div>


            <div class="col-md-5">


                <?php
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
	$query=mysqli_query($conn,"SELECT post.*,user.name,user.photo FROM post INNER JOIN user ON post.user_id=user.id WHERE post.user_id='$id' ORDER BY post.id DESC ");
	
	}else{
	$query=mysqli_query($conn,"SELECT post.*,user.name,user.photo FROM post INNER JOIN user ON post.user_id=user.id ORDER BY post.id DESC ");
	}
	while($post=mysqli_fetch_assoc($query)){ ?>
                <div class="card mb-2">
                    <div class="card-header bg-white">
                        <img src="img/<?php echo $post['photo']; ?>" width="40px" class="rounded-circle mr-1"
                            style="border:3px solid #CCCCff">
                        <b style="font-size: 20px;color:blue"><i><?php echo $post['name']; ?></i></b>
                        <div style="float: right;">
                            <?php
						if($_SESSION['id']==$post['user_id']){
						?>


                            <i class="fas fa-circle text-warning ebtn" data-toggle="modal"
                                data-target="#edit_post_modal" post_id="<?php echo $post['id']; ?>"
                                title="<?php echo $post['title']; ?>" description="<?php echo $post['description']; ?>"
                                photo="<?php echo $post['post_photo']; ?>">
                            </i>
                            <a href="post/delete.php?id=<?php echo $post['id']; ?> " class="card-link text-dark"><i
                                    class="fas fa-times-circle text-danger"></i></a>

                            <?php } ?>
                        </div>
                    </div>
                    <div class="card-body" style="">
                        <h4><b><?php echo $post['title']; ?></b></h4>
                        <p class="text-justify"><?php echo $post['description']; ?></p>
                        <?php if($post['post_photo']){ ?>
                        <img src="img/<?php echo $post['post_photo']; ?>" width="100%;">
                        <?php } ?>

                    </div>
                    <div class="card-footer react bg-white">
                        <div>
                            <?php
				$sql4=mysqli_query($conn,"SELECT * FROM like_data WHERE post_id='".$post['id']."'");
				if(mysqli_num_rows($sql4)>0)
				{
				?>
                            <i class="fas fa-thumbs-up mr-1 text-info unlike" post_id="<?php echo $post['id']; ?>"
                                style="font-size: 20px"></i><!-- unlike -->
                            <?php }else{ ?>
                            <i class="fas fa-thumbs-up mr-1 like" post_id="<?php echo $post['id']; ?>"
                                style="font-size: 20px"></i><!-- like -->
                            <?php } ?>
                            <span class="badge badge-light" id="here<?php echo $post['id']; ?>">
                                <?php
		$sql3=mysqli_query($conn,"SELECT * FROM like_data WHERE post_id='".$post['id']."'");
		echo mysqli_num_rows($sql3);
		?>
                            </span>
                        </div>
                        <div><a href="comment.php?id=<?php echo $post['id']; ?>" class="text-dark card-link"><i
                                    class="far fa-comment-alt mr-1"></i><b class="text-info">Comment</b></a><span
                                class="badge badge-light">
                                <?php
		$sql3=mysqli_query($conn,"SELECT * FROM comment WHERE post_id='".$post['id']."'");
		echo mysqli_num_rows($sql3);
		?>
                            </span></div>
                        <div><i class="fas fa-share mr-1"></i></i><b class="text-info">Share</b></div>
                    </div>
                </div>
                <?php } ?>

            </div>




            <div class="col-md-2">
                <ul class="list-group side_right position-fixed online_area" style="width: 223px;">


                </ul>
            </div>
        </div>
    </div>






    <div class="modal fade" id="popular_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background:#6699CC">
                <div class="modal-header bg-info">
                    <h1 class="modal-title "><b style="color:green;">Popular Friends</b></h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-dialog " role="document">
                        <?php
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
	$sql7=mysqli_query($conn,"SELECT post.title,user.name,user.photo,post.id FROM post INNER JOIN user ON post.user_id=user.id WHERE post.id='$key'");
	$popular1=mysqli_fetch_assoc($sql7);

			 if($popular1['id']){ ?>
                        <div class="media border mb-2">

                            <div class="media-left">
                                <img src="img/<?php echo $popular1['photo']; ?>" class="media-object rounded-circle m-2"
                                    style="width:60px">
                                <p><small style="color:green">Posted Title: <?php echo $popular1['title']; ?></small>
                                </p>
                            </div>
                            <div class="media-body">
                                <h6 class="media-heading mt-3"><b style=""><?php echo $popular1['name']; ?></b></h6>

                                <span class="badge badge-light float-right" id="here<?php echo $post['id']; ?>">
                                    <?php
		$sql3=mysqli_query($conn,"SELECT * FROM like_data WHERE post_id='".$popular1['id']."'");
		echo mysqli_num_rows($sql3);
		?>
                                </span>
                            </div>
                        </div>

                        <?php } }?>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ................Create Posts Modal................ -->
    <div class="modal fade" id="create_post_Modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background:#66CCff">
                <div class="modal-header">
                    <h1 class="modal-title "><b style="color:green;">Create Posts</b></h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="post/create.php" enctype="multipart/form-data">
                        <input type="text" name="title" placeholder="Enter Title" class="form-control"
                            style="border:5px solid #CCCCff;"><br>
                        <textarea name="description" placeholder="What's on your mind?" class="form-control"
                            style="border:5px solid #CCCCff;"></textarea><br>
                        <b style="color:green">Photo : </b><input type="file" name="photo">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary badge-info" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-secondary badge-info"><i
                            class="far fa-plus-square mr-1"></i>Create</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ................Edit Posts Modal................ -->
    <div class="modal fade" id="edit_post_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><b>Edit Posts</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="post/create.php" enctype="multipart/form-data">
                        <input type="hidden" name="id" class="id">
                        <input type="text" name="title" placeholder="Enter Title" class="form-control title"><br>
                        <textarea name="description" placeholder="What's on your mind?"
                            class="form-control description"></textarea><br>
                        <img src="" class="img-fluid photo">
                        <b>Photo : </b><input type="file" name="photo">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-secondary"><i
                            class="far fa-plus-square mr-1"></i>Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('.ebtn').click(function() {
            var id = $(this).attr('post_id');
            var title = $(this).attr('title');
            var description = $(this).attr('description');
            var photo = $(this).attr('photo');

            $('.id').val(id);
            $('.title').val(title);
            $('.description').val(description);
            if (photo) {
                $('.photo').show();
                $('.photo').attr('src', 'img/' + photo);
            } else {
                $('.photo').hide();
            }
        });
    });

    $(document).ready(function() {
        $('.like').click(function() {
            var id = $(this).attr('post_id');
            $(this).toggleClass('like');
            if ($(this).hasClass('like')) {
                $(this).removeClass('text-info');
            } else {
                $(this).addClass('text-info');
            }
            $.ajax({
                url: "like_unlike/action.php",
                type: "POST",
                data: {
                    id
                },
                success: function(data) {
                    likeCount(id);
                }
            })
        });

        $('.unlike').click(function() {
            var id = $(this).attr('post_id');
            $(this).toggleClass('unlike');
            if ($(this).hasClass('unlike')) {
                $(this).addClass('text-info');
            } else {
                $(this).removeClass('text-info');
            }
            $.ajax({
                url: "like_unlike/action.php",
                type: "POST",
                data: {
                    id
                },
                success: function(data) {
                    likeCount(id);
                }
            })
        });

        function likeCount(id) {
            var id = id;
            $.ajax({
                url: "like_unlike/count.php",
                type: "POST",
                data: {
                    id
                },
                success: function(data) {
                    $('#here' + id).html(data);
                }
            });
        }
    });

    $(document).ready(function() {
        $('.online_area').load('online/online_user.php');
        onlineUserRefresh();


        function onlineUserRefresh() {
            setTimeout(function() {
                $('.online_area').load('online/online_user.php');
                onlineUserRefresh();
            }, 1000);
        }
    });
    </script>
</body>

</html>