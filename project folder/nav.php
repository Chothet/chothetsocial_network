<?php
session_start();
include('db.php');
$id=$_SESSION['id'];

if(!$_SESSION['id'])
{
  header("location:../index.php");
}
// 

$sql=mysqli_query($conn,"SELECT * FROM user WHERE id='$id'");
$user=mysqli_fetch_assoc($sql);
?>
<nav class="navbar navbar-expand-lg shadow-sm navbar-light container-fluid fixed-top mainmenu" style="background:#66CCFF">
<div class="container">
  <a class="navbar-brand" href="home.php" >
   <img src="img/brand.png" style="width:30px; border-radius:50%">
    <b style="color:green; font-size:30px; font-family:Times New Romance">ChoThet Social</b> <sub><small class="text-danger font-weight-bold">Network Project</small></sub></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link " href="home.php"><img src="img/<?php echo $user['photo']; ?>"style="width:50px;border:2px solid green; border-radius:50%"><b style="color:blue"><?php echo $user['name']; ?></b></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link font-weight-bold text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-home" style="font-size:24px;color:green"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown"  style="background:#CCCCff">
      <a href="home.php" class="card-link text-dark"></i> All Posts <span class="badge badge-info" style="width:30px;border:2px solid yellow ">
        <?php 
        $sql1=mysqli_query($conn,"SELECT * FROM post");
        echo mysqli_num_rows($sql1);
        ?> 
        </span></a>

        <a href="home.php?id=<?php echo $_SESSION['id']; ?>" class="card-link text-dark" style="display:block;margin-left:0px">Own Posts 
       <span class="badge badge-info" style="width:30px;border:2px solid yellow ">
        <?php 
        $sql1=mysqli_query($conn,"SELECT * FROM post WHERE user_id='".$_SESSION['id']."'");
        echo mysqli_num_rows($sql1);
        ?>  
        </span></a>

        <!--  -->

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="auth/logout.php"style="color:red">Logout</a>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link font-weight-bold text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-user-friends" style="font-size:24px;color:green"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background:#CCCCff">
        <a class="dropdown-item" href="friend.php" class="card-link text-dark"><i class="fas fa-user-friends"  style="font-size:24px;color:green"></i> All Friends <span class="badge badge-info"style="width:30px;border:2px solid yellow ">
         <?php 
        // $sql1=mysqli_query($conn,"SELECT * FROM students WHERE id!='".$_SESSION['id']."'");
         $sql1=mysqli_query($conn,"SELECT * FROM user");
        echo mysqli_num_rows($sql1);
        ?>  
        </span></a>

        <!--  -->

          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="auth/logout.php"  style="color:red">Logout</a>
        </div>
      </li>

      <li class="nav-item">
        <i data-toggle="modal" data-target="#popular_modal" class="nav-link  fas fa-user-friends mt-1"  style="font-size:24px;color:#CC6600"></i>
      </li>


      





      <li class="nav-item">
        <i data-toggle="modal" data-target="#create_post_Modal" class="nav-link  fas fa-plus-circle mt-1"  style="font-size:24px;color:green"></i>
      </li>

       
  
      <!--  -->

      <li class="nav-item">
        <a class="nav-link text-dark" href="#">

          <input type="" placeholder="Search Here" class="name mr-1 search_input" style="display: none; width: 300px;border:none;outline: none;border-bottom: 1px solid #aaa;"><i class="fas fa-search search_btn" style="font-size:24px;color:green"></i></a>
      </li>
     <!--  <li class="nav-item">
        <i data-toggle="modal" data-target="#admin_post_Modal" class="fas fa-home" style="font-size:24px;color:green"></i>
      </li>
      
       <li class="nav-item">
        <i data-toggle="modal" data-target="#admin_post_Modal" class="fas fa-user-friends" style="font-size:24px;color:red"></i>
      </li> -->
      

  </div>

</div>
</nav>

<script type="text/javascript">
  $('.search_btn').click(function(){
    $('.search_input').toggle('slow');
  });

  $('.name').change(function(){
      var name=$(this).val();
      $.ajax({
        url:"search/action.php",
        type:"POST",
        data:{name},
        success:function(data){
          $('#searchModal').modal('show');
          $('.here').html(data);
          $('.name').val("").toggle();
        }
      });
  });
</script>

<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Friend Search Lists</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body here">
       
      </div>
    </div>
  </div>
</div>
</div>








