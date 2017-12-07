<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>asset/images/title.png">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/common/style.css">
  <!-- <link rel="stylesheet" href="../common/common.css"> -->
  <script src="<?php echo base_url(); ?>asset/common/jquery-3.1.1.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container login-container">
  
  <form>
	
	<div class='forgot-title'>
		<span class='header-text-forgot'>Forgot your password!!</span>
	</div>

    <div class="form-group">
    	<div class="radio">
			<label class="input-radio-2 log_txt"><input type="radio" name="optradio">Merchant</label>
			<label class="input-radio-2 log_txt"><input type="radio" name="optradio">Client</label>
		</div>

      	<input type="email" class="form-control input-normal" id="email" placeholder="Email">

	    <button class="btn btn-default input-submit">
	    	<span>Get a new password</span>
	    </button>

	    <div class="input-link-forgot">
	    	<a href="login"> < Back to Log in</a>
	    </div>
    </div>

  </form>
</div>

</body>
</html>
