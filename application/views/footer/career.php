<?php include 'header.php';?>

<div class="container header-container">
	 <!-- Sign Up line -->
		<div class="row footer_title"><label>Career</label></div>
	 <!-- instert the information table -->
		<div class="container">
		<form class="form-horizontal" action="<?php echo site_url('');?>" method="post">
			<div class="row bank_form">
				<div class="col-sm-5">
				<div class="form-group sub-form">
					<div class="">
						<div class="col-sm-12 footer_c">
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="name" placeholder="">
						</div>
						<div class="col-sm-12 footer_c">
							<label for="name">Mobile Number:</label>
							<input type="text" class="form-control" id="name" placeholder="">
						</div>
						<div class="col-sm-12 footer_c">
							<label for="name">Email Address:</label>
							<input type="text" class="form-control" id="name" placeholder="">
						</div>
					</div>
				</div>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-5">
					<div class="form-group sub-form">
						<div class="">
							<div class="col-sm-12">
								<label for="name">Message:</label>
								<textarea class="form-control small-text" id="name" placeholder=""></textarea>
							</div>
							<div class="col-sm-12">
								<label>Upload CV :</label>
								<input type="file" name="">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
		    <span class="col-md-4"></span>
		    <button class="col-md-3 btn btn-default input-submit">
		    	<span>Submit</span>
		    </button>
		    </div>
		</form>
	</div>
	
 </div>

 <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
