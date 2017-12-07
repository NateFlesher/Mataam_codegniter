<!DOCTYPE html>
<html lang="en">
<head>
  <title>Logo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>asset/images/title.png">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/common/style.css">
  <!-- <link rel="stylesheet" href="../common/common.css"> -->
  <script src="<?php echo base_url(); ?>asset/common/jquery-3.1.1.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/common/script.js"></script>
</head>
<body>

<div class="container login-container">
  
  <form action="<?php echo site_url('login/login_user');?>" method='post'>
	<div class="form-group input-image">
		<div><span class='header-text'>Welcome to</span></div>
		<img class='login-img' src="<?php echo base_url(); ?>asset/images/login.png"/>
		<div><span class='blue-text'>Al</span><span class='blue-text blue-size'>Mohasil</span></div>
	</div>

    <div class="form-group">
    	<div class="radio">
			<label class="input-radio-2 log_txt"><input type="radio" name="optradio">Merchant</label>
			<label class="input-radio-2 log_txt"><input type="radio" name="optradio">Client</label>
		</div>

      	<input type="email" class="form-control input-up" id="email" name="email" placeholder="Email">
    	<input type="password" class="form-control input-down" id="pwd" name="pwd" placeholder="Password">

    	<div class="radio">
			<label class="input-radio-1"><input type="radio" name="Keep">Keep me logged in</label>
			<a href="login/new_user">New User</a>
		</div>

	    <button class="btn btn-default input-submit login_company">
	    	<span>Log in</span>
	    </button>

	    <div class="input-link">
	    	<a href="forgotPassword">Forgot Password?</a>
	    </div>
    </div>


  </form>
</div>

</body>
</html>
