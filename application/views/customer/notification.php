<?php include 'header.php';?>

<div class="container header-container">

	<nav class="navbar navbar-default menu">
        <div class="container-fluid menu-area">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
            <ul class="nav navbar-nav menu-ul">
            	<li><a href="<?php echo site_url('customer/index')?>">Dashboard</a></li>
  				<li><a href="<?php echo site_url('customer/index/payment')?>">Direct Payment</a></li>
  				<li><a href="<?php echo site_url('customer/index/TransactionReport')?>">Transaction and Reports</a></li>
  				<li class="active"><a href="<?php echo site_url('customer/index/setting')?>">Setting</a></li>
  				<li><a href="<?php echo site_url('customer/index/wallet')?>">Wallet</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>

	<div class="row content">
		<div class="row twin_btn2">
			<!-- <div class="col-sm-6">
				<a href="./setting.html"><button class="form-group btn btn_send"><span>Profile</span></button></a>
			</div>
			<div class="col-sm-6">
				<button class="form-group btn btn_request active"><span>Notifications</span></button>
			</div>
		     -->
		    <a href="<?php echo site_url('customer/index/setting')?>"><button class="col-sm-6 btn btn_send"><span>Profile</span></button></a>
		    <button class="col-sm-6 btn btn_request active"><span>NotiFications</span></button>
		</div>
		<div class="form-group row radio_groups">
			<label>You will receive an email when you: </label>
			<div class="radio">
				<label><input type="radio" name="optradio">Receive a payment.</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio">Make a payment.</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio">Request a payment.</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio">Withdraw funds.</label>
			</div>
			<div class="radio">
				<label><input type="radio" name="optradio">Service and Policy Updates</label>
			</div>
		</div>
	
	   	<div class="form-group Update_Button">
	   		<button class="btn btn-default input-submit"><span>Update</span></button>
	    </div>
	</div>
    </div>

    <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
