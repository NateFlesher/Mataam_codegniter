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
  				<li class="active"><a href="<?php echo site_url('customer/index/payment')?>">Direct Payment</a></li>
  				<li><a href="<?php echo site_url('customer/index/TransactionReport')?>">Transaction and Reports</a></li>
  				<li><a href="<?php echo site_url('customer/index/setting')?>">Setting</a></li>
  				<li><a href="<?php echo site_url('customer/index/wallet')?>">Wallet</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>

	<div class="row content">
		<div class="row twin_btn2">
			<a href="<?php echo site_url('customer/index/payment')?>"><button class="col-sm-6 btn btn_send"><span>Send Payments</span></button></a>
		    <a href="<?php echo site_url('customer/index/request')?>"><button class="col-sm-6 btn btn_request active"><span>Request Payments</span></button></a>
		</div>
		<form>
		<div class="form-group row ">
			<div class="col-sm-1"></div>
			<div class="form-group col-sm-5 sub-form">
			 	<div class="form-group col-sm-12 title">
			 		<label>Email-address:</label>
			  		<input type="email" class="form-control input-email" id="email" >
			 	</div>
			  	<div class="form-group col-sm-10 profile">
			  	 	<div class="col-sm-5 photo"></div> 
			  		<div class="col-sm-5 photo_text">
			  			<div class="col-sm-12">
		  					<label>CompanyName</label>
		  				  	<br>
		  				  	<label>Alexandra Egypt</label>
		  				  	<label>Alexandra Egypt</label>
		  				  	<br>
		  				  	<label>+20123456789</label>
		  				  	<label>Company@gmail.com</label>
			  			</div>
			  		</div>
			  	</div>
			</div>	
			
	    	<div class="form-group col-sm-5 sub-form">
	    	 	<div class="form-group col-sm-6 title">
			 		<label>Amount:</label>
			  		<input type="email" class="form-control input-Amount" id="email">
			 	</div>
			 	<div class="form-group col-sm-6 drop_menu">
			 		<select name="table_length" aria-controls="table" class="form-control input-sm">
						<option value="10">LE</option>
						<option value="25">CN</option>
						<option value="50">EN</option>
						<option value="100">NR</option>
					</select>
			 	</div>
			 	<div class="form-group col-sm-12 Detail_Info">
			 		<label style="float: left;">Description:</label>
			 		<div class="form-group col-sm-12 description"></div>
				</div>
	    	</div>
	   	</div>
	   	<div class="form-group Send_button">
	   		<button class="btn btn-default input-submit">Send</button>
	    </div>
	    </form>
	</div>

    </div>

    <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
