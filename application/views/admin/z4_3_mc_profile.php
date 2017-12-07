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
	            <li class="active"><a href="<?php echo site_url('admin/index/z4_5_mc_overview')?>">Manage Companies</a></li>
                <li><a href="<?php echo site_url('admin/index/z5_1_sms_setup')?>">Master Setup</a></li>
                <li><a href="<?php echo site_url('admin/index')?>">Footer</a></li>
                <li><a href="<?php echo site_url('admin/index/z8_1_home_main')?>">Homepage</a></li>
                <li><a href="<?php echo site_url('admin/index/z6_1_report')?>">Reports</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>
	
	<div class="row twin_btn">
        <a href="<?php echo site_url('admin/index/z4_5_mc_overview')?>"><button class="col-sm-2 btn btn_send"><span>Overview</span></button></a>
        <a href="<?php echo site_url('admin/index/z4_3_mc_profile/'.$com_Name)?>"><button class="col-sm-2 btn btn_mid active"><span>Company Profile</span></button></a>
        <a href="<?php echo site_url('admin/index/z4_2_mc_manage/'.$com_Name)?>"><button class="col-sm-2 btn btn_mid"><span>Manage Employee</span></button></a>
        <a href="<?php echo site_url('admin/index/z4_1_mc_charge/'.$com_Name)?>"><button class="col-sm-3 btn btn_mid"><span>Bank Details & charges</span></button></a>
        <a href="<?php echo site_url('admin/index/z4_4_mc_othersettings/'.$com_Name)?>"><button class="col-sm-2 btn btn_request"><span>Other Settings</span></button></a>
    </div>

	<div class="container">

	<div class="row">
		<div class="col-sm-6">
			<div class="col-sm-2">
				<label for="stat_sel" class="status">Status:</label>
			</div>
			<div class="radio col-sm-8">
				<label class="input-radio-2"><input type="radio" id="stat_E" name="stat_sel" value="stat_E">Enable</label>
				<label class="input-radio-2"><input type="radio" id="stat_D" name="stat_sel" value="stat_D">Disable</label>
			</div>
			<script type="text/javascript">
                var ee = "<?php echo $stat_sel;?>";
                if(ee == "0")
                    $('#stat_E').prop('checked', true);
                else
                    $('#stat_D').prop('checked', true);
            </script>
		</div>
	</div>

	<form class="form-horizontal">
		<div class="row bank_form">
            <div class="col-sm-5">
            <div class="form-group sub-form">
                <div style="margin-left: -15px; margin-right: -15px;">
                    <div class="col-sm-12">
                        <label for="com_Name">Company Name:</label>
                        <input type="text" class="form-control" id="com_Name" name="com_Name" value="<?php echo $com_Name;?>">
                    </div>
                    <div class="col-sm-12">
                        <label for="com_Address">Company Address:</label>
                        <input type="text" class="form-control" id="com_Address" name="com_Address" value="<?php echo $com_Address;?>">
                    </div>
                    <div class="col-sm-12">
                        <label for="contactNum">Contact Number:</label>
                        <div>
	                        <div class="input-group form_input1">               
                                <input type="text" class="form-control" id="country_no" value="+ <?php echo $country_no;?>">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                                     V
                                    </button>
                                    <ul class="dropdown-menu pull-right" id="countryNumList" style="min-width: 100px !important;">
                                     
                                    </ul>
                                </div><!-- /btn-group -->
                            </div>
	                        <input type="text" class="form-control form_input2" id="contactNum" name="contactNum" value="<?php echo $contactNum;?>">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label for="email">Email Address:</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>">
                    </div>
                    <div class="col-sm-12">
                        <label for="Logo" class="col-sm-12">Change Logo:</label>
                        <div class="logo-container col-sm-4">
                        </div>
                        <input type="file" class="logo-upload" name="changeLogo">
                    </div>
                </div>
            </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <div class="form-group sub-form">
                    <div style="margin-left: -15px; margin-right: -15px;">
                        <div class="col-sm-12">
                            <label for="category">Category:</label>
                            <input type="text" class="form-control" id="category" name="category" value="<?php echo $category;?>">
                        </div>
                        <div class="col-sm-12">
                            <label for="service">Service:</label>
                            <div class="radio">
                                <label class="input-radio-2"><input type="radio" id='invoice' name="service" value="invoice">Express Invoice</label>
                                <label class="input-radio-2"><input type="radio" id="direct" name="service" value="direct">Direct Payment</label>
                            </div>
                        </div>
                        <script type="text/javascript">
                            var pp = "<?php echo $service;?>";
                            if(pp == "0")
                                $('#invoice').prop('checked', true);
                            else
                                $('#direct').prop('checked', true);
                        </script>
                        <div class="col-sm-12 row_between">
                            <label for="socialmedia">Social Media:</label>
                        </div>
                        <div class="col-sm-12 form-inline input-inline">
                            <label for="facebook" class="control-label col-sm-4">Face book:</label>
                            <input type="text" class="form-control col-sm-8" id="facebook" name="facebook" value="<?php echo $facebook;?>">
                        </div>
                        <div class="col-sm-12 form-inline input-inline">
                            <label for="twitter" class="control-label col-sm-4">Twitter:</label>
                            <input type="text" class="form-control col-sm-8" id="twitter" name="twitter" value="<?php echo $twitter;?>">
                        </div>
                        <div class="col-sm-12 form-inline input-inline">
                            <label for="linkedin" class="control-label col-sm-4">Linkedin:</label>
                            <input type="text" class="form-control col-sm-8" id="linkedin" name="linkedin" value="<?php echo $linkedin;?>">
                        </div>
                        <div class="col-sm-12 form-inline input-inline">
                            <label for="instagram" class="control-label col-sm-4">Instagram:</label>
                            <input type="text" class="form-control col-sm-8" id="instagram" name="instagram" value="<?php echo $instagram;?>">
                        </div>
                        <div class="col-sm-12 form-inline input-inline">
                            <label for="youtube" class="control-label col-sm-4">Youtube:</label>
                            <input type="text" class="form-control col-sm-8" id="youtube" name="youtube" value="<?php echo $youtube;?>">
                        </div>
                        <div class="col-sm-12 form-inline input-inline">
                            <label for="googleplus" class="control-label col-sm-4">Google Plus:</label>
                            <input type="text" class="form-control col-sm-8" id="googleplus" name="googleplus" value="<?php echo $googleplus;?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div><input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>"></div> -->
        
        <div class="row">
        <span class="col-md-2"></span>
        <button class="col-md-3 btn btn-default input-cancel com_cancel" name="cancel">
            <span>Cancel</span>
        </button>
        <span class="col-md-3"></span>
        <button class="col-md-3 btn btn-default input-submit com_update" name="update">
            <span>Update</span>
        </button>
        </div>
	</form>
	</div>

	<script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                type : 'POST',
                url : "<?php echo site_url('admin/index/getcountryNumList')?>",
                dataType : 'json',
                success : function(res){
                    //alert(res.length);
                    for(var i = 0; i < res.length; i++)
                    {
                        console.log(res[i][1]);
                        document.getElementById("countryNumList").innerHTML += '<li><a href="javascript:void(0);" id="countryNumRecord'+i+'" class="countryNumRecord" data-val="+ '+res[i][1]+'">+ '+res[i][1]+'</a></li>';
                    }
                }
            })

            $(document).on('click', 'a.countryNumRecord', function(){
                $('#country_no').val($(this).data('val'));
            });

            // footer_position();
        });
    </script>


	</div>

	<?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
