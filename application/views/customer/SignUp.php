<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>asset/images/title.png">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/common/customer.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/common/superuser.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/common/common.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/common/input_place_default.css">
  <script src="<?php echo base_url(); ?>asset/common/jquery-3.1.1.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/common/script.js"></script>
</head>
<body>
<div class="header-title"><img class="header-mark" src="<?php echo base_url(); ?>asset/images/mark.png" />
	
	<div class="logout_mark">
		<div class="input-group-btn logout_mark1">
			<button type="button" class="btn dropdown-toggle vertical-text " data-toggle="dropdown" aria-expanded="true">
			 &#9661;
			
			</button>
			<ul class="dropdown-menu pull-right">
			 <li><a href="<?php echo site_url('login/logout_user');?>">First Page</a></li>
			</ul>
		</div>
		<img src="<?php echo base_url(); ?>asset/images/avatar_ex.png"  class="logout_mark">
	</div></div>

<div class="container header-container">
<form method="post" id='signup_form'>
	<div class="row content">
	 <!-- Sign Up line -->
		<div class="row sign_title"><label>Sign Up</label></div>
	 <!-- instert the information table -->
		 <div class="row form-group reg_table">
		 	<div class="form-group col-sm-6">
		 		<div class="person_info">
		 			 <div class="form-group  col-sm-12 left_info">
		 			 	<!-- <form> -->
			      			<label for="text">Name*:</label>
			     			<input type="text" class="form-control" id="username" name="username">
			     		<!-- Email Address -->
			     			<label for="email">Email Address*:</label>
	  						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	  					<!-- Contact Number -->
	  					<label for="text">Contact Number*:</label>
	  					<div style="width: 100%">
	  						<div class="input-group form_input1">               
                                <input type="text" class="form-control" id="country_no">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                                     V
                                    </button>
                                    <ul class="dropdown-menu pull-right" id="countryNumList" style="min-width: 80px !important;">
                                     
                                    </ul>
                                </div><!-- /btn-group -->
                            </div>
	  						<input id="contactNum" type="text" class="form-control form_input2" id="contactNum"  name="contactNum">
	  					</div>
						<!-- Password  -->
	  						<label>Password*:</label>
	 						<input type="password" class="form-control" id="pwd" name="pwd">
						<!-- Confirm Password -->
	  				
	  						<label>Confirm Password*:</label>
	 						<input type="password" class="form-control" id="confirm" name="confirm">
						<!-- photo -->
						<label>Photo</label>
						<div class="sign_photo"></div>
						<input type="file" class="logo-upload" name="photo_input" id="photo_input">
		 			 	<!-- </form> -->
				    </div>
		 		</div>
		 	</div>
		 	<div class="form-group  col-sm-6">
		 		<div class="nation_info">
		 			<div class="form-group  col-sm-12 right_info">
		 				<!-- <form> -->
		 					<!-- Select the Gender -->
		 					<div class="row">
		 			 			<div class="form-group col-sm-3"><label for="text">Gender:</label></div>
		 			 			<div class="radio col-sm-8 gender_radio">
									<label class="input-radio-2 log_txt"><input type="radio" class="gender" name="gender" value="male">Male</label>
									<label class="input-radio-2 log_txt"><input type="radio" class="gender" name="gender" value="female">Female</label>
								</div>
		 			 		</div> 
		 			 	<!-- BirthDay -->
		 			 			<label for="text">BirthDay:</label>
		 			 			<div class="row">
		 			 				<div class="col-sm-4">
		 			 					<select class="custom-select Drop_Memu" id="birth_day" name="birth_day">
										  <option selected>Day</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										  <option value="7">7</option>
										  <option value="8">8</option>
										  <option value="9">9</option>
										  <option value="10">10</option>
										  <option value="11">11</option>
										  <option value="12">12</option>
										  <option value="13">13</option>
										  <option value="14">14</option>
										  <option value="15">15</option>
										  <option value="16">16</option>
										  <option value="17">17</option>
										  <option value="18">18</option>
										  <option value="19">19</option>
										  <option value="20">20</option>
										  <option value="21">21</option>
										  <option value="22">22</option>
										  <option value="23">23</option>
										  <option value="24">24</option>
										  <option value="25">25</option>
										  <option value="26">26</option>
										  <option value="27">27</option>
										  <option value="28">28</option>
										  <option value="29">29</option>
										  <option value="30">30</option>
										  <option value="31">31</option>
										</select>
		 			 				</div>
		 			 				<div class="col-sm-4">
		 			 					<select class="custom-select Drop_Memu" id="birth_month" name="birth_month">
										  <option selected>Month</option>
										  <option value="1">January</option>
										  <option value="2">Febuary</option>
										  <option value="3">March</option>
										  <option value="4">April</option>
										  <option value="5">May</option>
										  <option value="6">June</option>
										  <option value="7">July</option>
										  <option value="8">August</option>
										  <option value="9">September</option>
										  <option value="10">October</option>
										  <option value="11">November</option>
										  <option value="12">December</option>
										</select>
		 			 				</div>
		 			 				<div class="col-sm-4">
		 			 					<select class="custom-select Drop_Memu" id="birth_year" name="birth_year">
										  <option selected>Year</option>
										
										<?php 
											$curYear = date('Y');
											for($j = 0; $j < 100; $curYear--, $j++ )
											{
										?>
										
										  <option><?php echo $curYear;?></option>
										
										<?php 
											}
										?>
										</select>
		 			 				</div>
		 			 			</div>
			     		<!-- Address -->
		
			     				<label for="text">Address*:</label>
			     				<input type="text" class="form-control" id="address" name="address">
			     		<!-- Langusge -->
			     				<label for="text">Language*:</label>
			     				<div class="col-sm-12" style="padding-left: 0px; padding-right: 0px;">
		 			 					<select class="custom-select Drop_Memu" id="lang" name="lang">
										  <option selected></option>
										  <option value="1">English</option>
										  <option value="2">German</option>
										  <option value="3">Russian</option>
										  <option value="4">French</option>
										  <option value="5">Italian</option>
										  <option value="6">Indonesian</option>
										  <option value="7">Chinese</option>
										</select>
		 			 				</div>
			     				
			     		<!-- Nationality -->
			     				<div class="form-group">
								    <label for="exampleSelect1">Nationality*:</label>
								    <select class="form-control" id="national" name="national">
								      <option>Italy</option>
								      <option>Russia</option>
								      <option>China</option>
								      <option>Janpan</option>
								      <option>Germany</option>
								    </select>
								 </div>

			     				
			     		<!-- ID -->
			     				<label for="text">ID:*</label>
			     				<input type="text" class="form-control" id="userid" name="userid">
			     		<!-- photo -->
								<label>Photo</label>
								<div class="sign_photo"></div>
								<input type="file" class="logo-upload" name="photo_input2" id="photo_input2">
								<!-- dropdown and text -->
								
			     		<!-- </form>	 -->		
				     </div>			
			 	</div>
			</div>
		</div>
	<!-- Add Radio Button -->
		<div class="form-check radio_Term ">
			<input class="form-check-input" type="radio" id="pp_term" name="pp_term">
	  		<label style="margin-left: 10px;">I have read and understood the <font color="#4fa7ff">Privacy Policy and </font>  agree to the <font color="#4fa7ff">Terms of Use</font>.</label>	
		</div>
	
		<div class="row form-group capture_image"> 
			<label>Please enter the code shown in the image</label>
			<figure class="figure">
	  		<img src="<?php echo base_url(); ?>asset/images/customer/200-60.png" class="figure-img img-fluid rounded">
	  		<input type="button"  class="reload_btn">
			</figure>
			<div class="row"><input type="text" class="form-group location" id="robot_check" name="robot_check"></div>
		</div>
		<div class="register">
			<div class="form-group Register_Btn">
			   	<button class="btn btn-default input-submit">
			    	<span>Register Now</span>
			    </button>
			</div>
		</div>
	</div>

	</form>
 </div>

 <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
