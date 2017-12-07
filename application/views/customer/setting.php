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
			<button class="col-sm-6 btn btn_send active"><span>Profile</span></button>
		    <a href="<?php echo site_url('customer/index/notification')?>"><button class="col-sm-6 btn btn_request "><span>NotiFications</span></button></a>
		</div>
		<form>
		<div class="form-group row ">
			<div class="col-sm-1"></div>
			 <div class="form-group col-sm-5 sub-form">
			 	<div class="form-group col-sm-12 title">
			 		<label>Name:</label>
			  		<input type="text" class="form-control input-text" id="text" >
			  		<label>Address:</label>
			  		<input type="text" class="form-control input-text" id="text" >
			  		<label>Contact Number:</label>
			  		<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-btn">
							<button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
							 V
							</button>
							<ul class="dropdown-menu pull-right">
							 <li><a href="#">Action</a></li>
							</ul>
						</div><!-- /btn-group -->
						</div>
    			     <label>ChangePhoto:</label>
    			     <div class="form-group form-inline">
    			     	<div class=" changephoto"></div>
    				 	<input type="file">
    				 </div>
    				 
			  	</div>
			  </div>	
			
	     <div class="form-group col-sm-5 sub-form">
			 	<div class="form-group col-sm-12 title">
			 		<label>EmailAddress:</label>
			  		<input type="text" class="form-control input-text" id="text" >
			  		<label>Language:</label>
			  		<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-btn">
							<button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
							 V
							</button>
							<ul class="dropdown-menu pull-right">
							 <li><a href="#">Action</a></li>
							</ul>
						</div><!-- /btn-group -->
						</div>
			  		<label>Contact Number:</label>
			  		<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-btn">
							<button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
							 V
							</button>
							<ul class="dropdown-menu pull-right">
							 <li><a href="#">Action</a></li>
							</ul>
						</div><!-- /btn-group -->
					</div>
    			     <label>ID:</label>
			  		 <input type="text" class="form-control input-text" id="text" >
			  	</div>
			  </div>
	   </div>
	   <div class="form-group Update_Button">
	   	<button class="btn btn-default input-submit">
	    	Update
	    </button>
	   </div>
	   </form>

		</div>
	

    </div>

    <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
