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
                <li><a href="<?php echo site_url('admin/index/z5_1_sms_setup')?>">Master Setup</a></li>
                <li><a href="<?php echo site_url('admin/index')?>">Footer</a></li>
                <li class="active"><a href="<?php echo site_url('admin/index/z8_1_home_main')?>">Homepage</a></li>
                <li><a href="<?php echo site_url('admin/index/z6_1_report')?>">Reports</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>
	
	<div class="row twin_btn2">
        <a href="<?php echo site_url('admin/index/z8_1_home_main')?>"><button class="col-sm-6 btn btn_send active"><span>Main Photos</span></button></a>
        <a href="<?php echo site_url('admin/index/z8_2_business_partners')?>"><button class="col-sm-6 btn btn_request"><span>Business Partners</span></button></a>
    </div>

	<div class="container">

	<form class="form-horizontal">
		<div class="row">
			<div class="col-sm-12 left_align">
			<div class="form-group sub-form">
				<div class="row">
					<div class="col-sm-12">
						<label for="name" class="col-sm-12">Header Photo :</label>
						<div class="logo-container col-sm-4">
						</div>
						<input type="file" class="logo-upload">
					</div>
					<div class="col-sm-12">
						<label for="name" class="col-sm-12">About Us Photo :</label>
						<textarea class="small-text col-sm-6" type="text" name="about_us_list"></textarea>
						<span class="col-sm-1"></span>
						<div class="logo-container col-sm-4">
						</div>
						<input type="file" class="logo-upload">
					</div>
					<div class="col-sm-12">
						<label for="name" class="col-sm-12">For Company Photo :</label>
						<textarea class="small-text col-sm-6" type="text" name="about_us_list"></textarea>
						<span class="col-sm-1"></span>
						<div class="logo-container col-sm-4">
						</div>
						<input type="file" class="logo-upload">
					</div>
					<div class="col-sm-12">
						<label for="name" class="col-sm-12">For Customer Photo :</label>
						<textarea class="small-text col-sm-6" type="text" name="about_us_list"></textarea>
						<span class="col-sm-1"></span>
						<div class="logo-container col-sm-4">
						</div>
						<input type="file" class="logo-upload">
					</div>
				</div>
			</div>
			</div>
			
		</div>

		<div class="row">
	    	<div class="col-md-12" style="text-align: center;">
	    		<button class=" btn btn-default input-submit">
			    	<span>Update</span>
			    </button>
			</div>
	    </div>
	</form>
	</div>

	</div>

	<?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
