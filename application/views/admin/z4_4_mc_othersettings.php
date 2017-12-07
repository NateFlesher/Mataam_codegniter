<?php include 'header.php';?>

<link rel="stylesheet" href="<?php echo base_url(); ?>asset/common/jqx.base.css">
<script src="<?php echo base_url(); ?>asset/common/jqxcore.js"></script>
<script src="<?php echo base_url(); ?>asset/common/jqxdatetimeinput.js"></script>
<script src="<?php echo base_url(); ?>asset/common/jqxcalendar.js"></script>		
<script src="<?php echo base_url(); ?>asset/common/globalization/globalize.js"></script>	

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
        <a href="<?php echo site_url('admin/index/z4_3_mc_profile/'.$com_Name)?>"><button class="col-sm-2 btn btn_mid"><span>Company Profile</span></button></a>
        <a href="<?php echo site_url('admin/index/z4_2_mc_manage/'.$com_Name)?>"><button class="col-sm-2 btn btn_mid"><span>Manage Employee</span></button></a>
        <a href="<?php echo site_url('admin/index/z4_1_mc_charge/'.$com_Name)?>"><button class="col-sm-3 btn btn_mid"><span>Bank Details & charges</span></button></a>
        <a href="<?php echo site_url('admin/index/z4_4_mc_othersettings/'.$com_Name)?>"><button class="col-sm-2 btn btn_request active"><span>Other Settings</span></button></a>
    </div>

	<div class="container">
	<form class="form-horizontal">
		<div class="row bank_form">
			<div class="col-sm-5">
			<div class="form-group sub-form">
				<div style="margin-left: -15px; margin-right: -15px;">
					<div class="col-sm-12">
						<label for="name">Payment:</label>

						<div class="radio">
							<label class="input-radio-2"><input type="radio" id="payReq" name="service" value="0">On Request</label>
							<label class="input-radio-2"><input type="radio" id="payAuto" name="service" value="1">Automatic</label>
						</div>
						<script type="text/javascript">
			                var ee = "<?php echo $payment;?>";
			                if(ee == "0")
			                    $('#payReq').prop('checked', true);
			                else
			                    $('#payAuto').prop('checked', true);
			            </script>
					</div>
					<div class="col-sm-12">
						<label for="name">Credit time:</label>
						<div>						
					        <script type="text/javascript">
					            $(document).ready(function () {                
					                // create jqxcalendar.
					                $("#credit_time").jqxDateTimeInput({width: '100%', height: 34});
					                $("#credit_time").val("<?php echo $credit_time;?>");
					             });
					        </script>
					        <div id='credit_time'>
					        </div>
					    </div>
					</div>
					<div class="col-sm-12">
						<label for="name">Credit limit:</label>
						<div>						
					        <script type="text/javascript">
					            $(document).ready(function () {                
					                // create jqxcalendar.
					                $("#credit_limit").jqxDateTimeInput({width: '100%', height: 34});
					                $("#credit_limit").val("<?php echo $credit_limit;?>");
					             });
					        </script>
					        <div id='credit_limit'>
					        </div>
					    </div>
					</div>
					<div class="col-sm-12">
						<label for="name">SMS Language:</label>
						<div class = "input-group">               
						<input type = "text" class = "form-control" id="sms_language" value="<?php echo $sms_language;?>">
						<div class = "input-group-btn">
							<button type = "button" class = "btn btn-default dropdown-toggle vertical-text" 
							 data-toggle = "dropdown">
							 V
							</button>
							<ul class = "dropdown-menu pull-right"  id="langList">
							 <!-- <li><a href = "#">Choose Language</a></li> -->
							</ul>
						</div><!-- /btn-group -->
						</div>
					</div>
					<div class="col-sm-12">
						<label for="sms_text">Custom SMS Text:</label>
						<textarea class="form-control small-text" id="sms_text" placeholder=""></textarea>
					</div>
				</div>
			</div>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-5">
				<div class="form-group sub-form">
					<div style="margin-left: -15px; margin-right: -15px;">
						<div class="col-sm-12">
							<label for="name">Currency:</label>
							<div class = "input-group">               
							<input type = "text" class = "form-control" id="currency" value="<?php echo $currency;?>">
							<div class = "input-group-btn">
								<button type = "button" class = "btn btn-default dropdown-toggle vertical-text" 
								 data-toggle = "dropdown">
								 V
								</button>
								<ul class = "dropdown-menu pull-right" id="curList">
								 <!-- <li><a href = "#">Choose Currency</a></li> -->
								</ul>
							</div><!-- /btn-group -->
							</div>
						</div>
						<div class="col-sm-12" style="height: 20pt"></div>
						<div class="col-sm-12">
							<label for="service">Notifications Setup:</label>
						</div>
						<div class="col-sm-12">
							<label for="owner">Owner:</label>
							<div class="radio input-radio-group">
								<label class="input-radio-3"><input type="radio" id="ownerInvoice" name="owner" value="0">Express Invoice</label>
								<label class="input-radio-3"><input type="radio" id="ownerDirect" name="owner" value="1">Direct Payment</label>
								<label class="input-radio-3"><input type="radio" id="ownerRelease" name="owner" value="2">Release money</label>
							</div>
							<script type="text/javascript">
				                var owner = "<?php echo $owner;?>";
				                switch(owner)
				                {
				                	case '0':
				                    	$('#ownerInvoice').prop('checked', true);
				                    	break;
				                    case '1':
				                    	$('#ownerDirect').prop('checked', true);
				                    	break;
				                    case '2':
				                    	$('#ownerRelease').prop('checked', true);
				                    	break;
				                }
				            </script>
						</div>
						<div class="col-sm-12">
							<label for="super">Super Agent:</label>
							<div class="radio input-radio-group">
								<label class="input-radio-3"><input type="radio" id="superInvoice" name="super" value="0">Express Invoice</label>
								<label class="input-radio-3"><input type="radio" id="superDirect" name="super" value="1">Direct Payment</label>
								<label class="input-radio-3"><input type="radio" id="superRelease" name="super" value="2">Release money</label>
							</div>
							<script type="text/javascript">
				                var superagent = "<?php echo $superAgent;?>";
				                switch(superagent)
				                {
				                	case '0':
				                    	$('#superInvoice').prop('checked', true);
				                    	break;
				                    case '1':
				                    	$('#superDirect').prop('checked', true);
				                    	break;
				                    case '2':
				                    	$('#superRelease').prop('checked', true);
				                    	break;
				                }
				            </script>
						</div>
						<div class="col-sm-12">
							<label for="agent">Agent:</label>
							<div class="radio input-radio-group">
								<label class="input-radio-3"><input type="radio" id="agentInvoice" name="agent" value="0">Express Invoice</label>
								<label class="input-radio-3"><input type="radio" id="agentDirect" name="agent" value="1">Direct Payment</label>
								<label class="input-radio-3"><input type="radio" id="agentRelease" name="agent" value="2">Release money</label>
							</div>
							<script type="text/javascript">
				                var agent = "<?php echo $agent;?>";
				                switch(agent)
				                {
				                	case '0':
				                    	$('#agentInvoice').prop('checked', true);
				                    	break;
				                    case '1':
				                    	$('#agentDirect').prop('checked', true);
				                    	break;
				                    case '2':
				                    	$('#agentRelease').prop('checked', true);
				                    	break;
				                }
				            </script>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
	    <span class="col-md-2"></span>
	    <button class="col-md-3 btn btn-default input-cancel">
	    	<span>Cancel</span>
	    </button>
	    <span class="col-md-3"></span>
	    <button class="col-md-3 btn btn-default input-submit setting_update">
	    	<span>Update</span>
	    </button>
	    </div>
	</form>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){

			// footer_position();
			
			$.ajax({
                type : 'POST',
                url : "<?php echo site_url('admin/index/getLangList')?>",
                dataType : 'json',
                success : function(res){
                    
                    for(var i = 0; i < res.length; i++)
                    {
                        console.log(res[i][1]);
                        document.getElementById("langList").innerHTML += '<li><a href="javascript:void(0);" id="langRecord'+i+'" class="langRecord" data-val="'+res[i][1]+'">'+res[i][1]+'</a></li>';
                    }
                }
            })

            $(document).on('click', 'a.langRecord', function(){
                //alert($(this).data('val'));
                $('#sms_language').val($(this).data('val'));
            });

            $.ajax({
                type : 'POST',
                url : "<?php echo site_url('admin/index/getCurrencyList')?>",
                dataType : 'json',
                success : function(res){
                    
                    for(var i = 0; i < res.length; i++)
                    {
                        console.log(res[i][1]);
                        document.getElementById("curList").innerHTML += '<li><a href="javascript:void(0);" id="curRecord'+i+'" class="curRecord" data-val="'+res[i][1]+'">'+res[i][1]+'</a></li>';
                    }
                }
            })

            $(document).on('click', 'a.curRecord', function(){
                //alert($(this).data('val'));
                $('#currency').val($(this).data('val'));
            });

			$('#sms_text').val("<?php echo $sms_text;?>");

			$('.setting_update').click(function(event){
                event.preventDefault();

                var payment = $('input[name=service]:checked').val();
                var credit_limit = $('#credit_limit').val();
                var credit_time = $('#credit_time').val();
                var sms_language = $('#sms_language').val();
                var sms_text = $('#sms_text').val();
                var currency = $('#currency').val();
                var owner = $('input[name=owner]:checked').val();
                var superAgent = $('input[name=super]:checked').val();
                var agent = $('input[name=agent]:checked').val();
                var com_Name = "<?php echo $com_Name;?>";
                
                var arr = credit_limit.split('/');
                credit_limit = arr[2] + '-' + arr[1] + '-' + arr[0];

                arr = credit_time.split('/');
                credit_time = arr[2] + '-' + arr[1] + '-' + arr[0];

                var data = {
                    payment : payment, credit_time : credit_time, credit_limit : credit_limit, sms_language : sms_language, sms_text : sms_text, currency : currency, owner :  owner, superAgent : superAgent, agent : agent, com_Name : com_Name
                };

                $.ajax({
                    type : 'POST',
                    url : "<?php echo site_url('admin/index/comsetting_update');?>",
                    dataType : 'json',
                    data :  data,
                    success : function(res){
                        if(res)
                            alert('success');
                    }
                });
            })
		});
	</script>

	</div>

	<?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
