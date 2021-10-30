<!DOCTYPE html>
<html>
<head>
	<title>ChoThet Social Project</title>
	<?php include("cdn.php"); ?> 
  <style type="text/css">
       body {
      font-family:Times New Romance;
      background:#CCCCff;
    }
  </style>
</head>
<body>
<div class="container pt-5 "  >
	<h1 class="text-center mt-5" style="color:green;font-family:Times New Romance"><b>Cho Thet Masuda</b></h1>
  <div style=":#0066ff;width:100%">
 <h2 class="text-center"  style="color:#9933CC;font-family:Times New Romance"><i>Thank you for your registration.(^!^)</i></h2>
  <div class="text-center mt-5">
    <img src="img/cover.png" class="img-fluid" style="border:#9933CC solid 1px;height: 200px">
  </div> 
  </div>
  <div class="d-flex p-3 text-white justify-content-center"> 
	<button class="btn btn-outline-success" data-toggle="modal" data-target="#loginModal"><i class="fas fa-sign-in-alt mr-1"></i>Login</button>
  </div>

  

</div>



<!--Register Modal -->

  


<!--Login Modal -->
<div class="modal fade" id="loginModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#66CCff">
        <img src="img/brand.png" style="width:40px; border-radius:50%">
        <h2 class="modal-title" style="color:green"><b>Login Form</b></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="auth/login.php">
          <input type="phone" name="name" style="margin-bottom:8px;padding:2px;border-color:green;border-radius:13px;outline:none" required placeholder="Enter Your Name"><br>
       <input type="password" name="password" style="margin-bottom:8px;border-collapse: 10px;padding:2px;border-color:green;border-radius:3px;border-radius:13px;outline:none";required placeholder="Enter Your Password"><br>
      </div>
      *Mr/Mrs, please create post at my social.*
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-sign-in-alt mr-1"></i>Login</button>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
      </form>
    </div>
  </div>
</div>
</body>
</html>