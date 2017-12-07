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
	            <li><a href="<?php echo site_url('admin/index/z4_5_mc_overview')?>">Manage Companies</a></li>
                <li class="active"><a href="<?php echo site_url('admin/index/z5_1_sms_setup')?>">Master Setup</a></li>
                <li><a href="<?php echo site_url('admin/index')?>">Footer</a></li>
                <li><a href="<?php echo site_url('admin/index/z8_1_home_main')?>">Homepage</a></li>
                <li><a href="<?php echo site_url('admin/index/z6_1_report')?>">Reports</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>
	
	<div class="row twin_btn1">
        <a href="<?php echo site_url('admin/index/z5_1_sms_setup')?>"><button class="col-sm-2 btn btn_send"><span>SMS Setup</span></button></a>
        <a href="<?php echo site_url('admin/index/z5_2_email_setup')?>"><button class="col-sm-2 btn btn_mid"><span>Email Setup</span></button></a>
        <a href="<?php echo site_url('admin/index/z5_3_bank_setup')?>"><button class="col-sm-2 btn btn_mid"><span>Bank Setup</span></button></a>
        <a href="<?php echo site_url('admin/index/z5_4_business_cat')?>"><button class="col-sm-3 btn btn_mid active"><span>Business Category</span></button></a>
        <a href="<?php echo site_url('admin/index/z5_5_wallet_setup')?>"><button class="col-sm-2 btn btn_request"><span>Wallet Setup</span></button></a>
    </div>

	<form>
		<div class="row bank_form">
		<span class="col-md-1"></span>
		<div class="form-group col-md-5 sub-form">
			<div class="form-group form-inline">
				<label for="company_fees">Customer Fees: </label>
				<input type="text" name="company_fees" class="form-control input-small"><label for="company_fees"> %</label>
			</div>
			<div class="form-group">
				<label for="category">Category: </label>
				<input type="text" name="category" class="form-control">
			</div>
			<div class="row">
				<span class="col-md-1"></span>
			    <button class="col-md-5 btn btn-default input-add">
			    	Add
			    </button>
		    </div>
		</div>
		<div class="form-group col-md-5 sub-form">
			<label for="category_list">Category List: </label>
			<textarea class="form-control large-text" type="text" name="category_list" class="form-control"></textarea>
			<!-- <div class="list-group ">
			</div> -->
		</div>
		</div>
		<div class="row">
			<span class="col-md-5"></span>
		    <button class="col-md-2 btn btn-default input-submit">
		    	Update
		    </button>
	    </div>
	</form>

	</div>

	<?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
