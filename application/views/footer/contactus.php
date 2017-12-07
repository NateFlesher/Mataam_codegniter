<?php include 'header.php';?>

<div class="container header-container">
	 <!-- Sign Up line -->
		<div class="row footer_title"><label>Contact Us</label></div>
	 <!-- instert the information table -->
		<div class="container">
		<form" method="post">
			<div class="row bank_form">
				<div class="col-sm-5">
				<div class="form-group sub-form">
					<div class="row">
						<div class="col-sm-12 footer_c">
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="Name" placeholder="">
						</div>
						<div class="col-sm-12 footer_c">
							<label for="name">Mobile Number:</label>
							<input type="text" class="form-control" id="Mobile" placeholder="">
						</div>
						<div class="col-sm-12 footer_c">
							<label for="name">Email Address:</label>
							<input type="email" class="form-control" id="Email" placeholder="">
						</div>
					</div>
				</div>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-5">
					<div class="form-group sub-form">
						<div class="row">
							<div class="col-sm-12">
								<label for="name">Message:</label>
								<textarea class="form-control small-text1" id="Message" placeholder=""></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
		    <span class="col-md-4"></span>
		    <button class="col-md-3 btn btn-default input-submit contactus_submit">
		    	<span>Submit</span>
		    </button>
		    </div>
		</form>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.contactus_submit').click(function(){
				//alert('name=' + $('#Name').val() + '&mobile=' + $('#Mobile').val() + '&email=' + $('#Email').val() + '&message=' + $('#Message').val());
				$.ajax({
					url: '<?php echo site_url('footer/index/contactus_submit')?>',
					data: 'name=' + $('#Name').val() + '&mobile=' + $('#Mobile').val() + '&email=' + $('#Email').val() + '&message=' + $('#Message').val(),
					type: 'POST',
					success: function(res){
						alert('success');
					}
				})
			})
		})
	</script>
	
 </div>

 <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
