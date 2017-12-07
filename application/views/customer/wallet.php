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
  				<li ><a href="<?php echo site_url('customer/index/setting')?>">Setting</a></li>
  				<li class="active"><a href="<?php echo site_url('customer/index/wallet')?>">Wallet</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>

	 <div class="row content">
		 <div class="col-sm-3"></div>
		 	<div class="col-sm-9 buttons">
		 		<div class="col-sm-6 twin_balance">
					<button class="col-sm-6 btn btn_Balance">Balance</button>
				    <button class="col-sm-6 btn btn_2000">2000</button>
				</div>
				<div class="col-sm-6 withdraw_blue">
					<button class="btn btn-default input-submit">withdraw</button>
				</div>
		 	</div>
	   <!-- Payment cards -->
		   <div class="form-group form-inline row cards"><label>Cards</label></div>
		   <div class="container">
		   	    <div class="row payment_cards">
		   	    	<!-- <div class="form-group col-sm-4">
		   	    		<div class="form-group visa">
		   	    			<img src="asset/images/customer/visa_text.png" align="visa">
		   	    			<div class="visa-close_btn" data-dismiss="modal">
                				<img src="<>asset/images/customer/close.png" alt="close">
                			</div>
						</div>		
		   	    	</div>

		   	    	<div class="form-group col-sm-4">
		   	    		<div class="form-group mastercard">
		   	    			<img src="asset/images/customer/master_mark.png" align="visa">
		   	    			<div class="master-close_btn"  data-dismiss="modal"><img src="<>asset/images/customer/close.png" alt="close"></div>
		   	    		</div>
		   	    	</div> -->
		   	    	<div class="col-sm-4 dis_table">
		   	    		<button class="Add_card btn btn-default" id="addcard_btn">
	   	    				<div><span> + Add new card</span></div>
	   	    				
	   	    			</button>
		   	    	</div>
		   	    </div>
		   </div>
<!-- banks Accounts -->
	    <div class="form-group form-inline row cards"><label>Bank Accounts</label></div>
	   	<div class="container">
	   	    <div class="row payment_cards" >
	   	    	<!-- <div class="form-roup col-sm-4">
		   	    	<div class="form-group bank">
		   	    		 <div class="bank-close_btn" data-dismiss="modal">
		   	    		 	<img src="<>asset/images/customer/close.png" alt="close">
		   	    		 </div>
		   	    	</div>	
	   	    	</div> -->
	   	    	<div class="form-roup col-sm-4 dis_table">
	   	    		<button class="Add_bank btn btn-default" id="bank_account">
	   	    			<div class="add_num"><span> + Add new</span></div>
	   	    			<div class="add_num"><span>bank account</span></div>
	   	    		</button>
	   	    	</div>
	   	    </div>
	   </div>
	   <!-- insert the white space -->
	   <div class="container insert"></div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			// customer- wallet page
			var  newcard= $("<div class='col-sm-4 dis_table'><div class='visa'><img src='<?php echo base_url(); ?>asset/images/customer/visa_text.png' alt='visa'><div class='visa-close_btn' data-dismiss='modal'><img src='<?php echo base_url(); ?>asset/images/customer/close.png' alt='close'></div></div></div>");

			 $(".Add_card").click(function(){
			 	var newentry = newcard.clone();
			 	newentry.find(".visa-close_btn").click(function(){
			 		newentry.remove();
			 	})
			 	newentry.insertBefore($(this).parent());
			 });

			 var  newcount= $("<div class='col-sm-4 dis_table'><div class='bank'><div class='bank-close_btn' data-dismiss='modal'><img src='<?php echo base_url(); ?>asset/images/customer/close.png' alt='close'></div></div></div>");

			 $("#bank_account").click(function(){
			 	var newbank = newcount.clone();
			 	newbank.find(".bank-close_btn").click(function(){
			 		newbank.remove();
			 	})
			 	newbank.insertBefore($(this).parent());
			 });
			});
	</script>
	
<!-- footer -->
    </div>

    <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
