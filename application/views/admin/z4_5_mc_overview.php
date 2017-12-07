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
        <a href="<?php echo site_url('admin/index/z4_5_mc_overview')?>"><button class="col-sm-2 btn btn_send active"><span>Overview</span></button></a>
        <a href="<?php echo site_url('admin/index/z4_3_mc_profile/'.$com_Name)?>"><button class="col-sm-2 btn btn_mid"><span>Company Profile</span></button></a>
        <a href="<?php echo site_url('admin/index/z4_2_mc_manage/'.$com_Name)?>"><button class="col-sm-2 btn btn_mid"><span>Manage Employee</span></button></a>
        <a href="<?php echo site_url('admin/index/z4_1_mc_charge/'.$com_Name)?>"><button class="col-sm-3 btn btn_mid"><span>Bank Details & charges</span></button></a>
        <a href="<?php echo site_url('admin/index/z4_4_mc_othersettings/'.$com_Name)?>"><button class="col-sm-2 btn btn_request"><span>Other Settings</span></button></a>
    </div>

    <div class="form-group left_align">
        <div class="form-group form-inline sub-form-group">
            <label for="com_dia" class="control-label " style="margin-left: 15px; ">Company Name:</label>
            <div class="input-group">               
                <input type="text" class="form-control" id="com_dia">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                     V
                    </button>
                    <ul class="dropdown-menu pull-right" id="com_dia_list">
                     
                    </ul>
                </div><!-- /btn-group -->
            </div>
            <button class="btn_add">Add</button>
            <button class="btn_edit">Edit</button>
        </div>
    </div>
	<div class="row diagram">
    <div class="col-sm-1"></div>
		<div class="col-sm-2 dia_tra dia_margin">
			<div class="transaction">
				<div class="dia_num"><span>100</span></div>
				<div class="dia_num"><span>200</span></div>
			</div>
		</div>
		<div class="col-sm-3 dia_cre dia_margin">
			<div class="credit_debit">
				<div class="dia_num"><span>100</span><span>300</span></div>
				<div class="dia_num"><span>200</span><span>500</span></div>
			</div>
		</div>
		<div class="col-sm-2 dia_tv dia_margin">
			<div class="total_value">
				<div class="dia_num"><span>100</span></div>
				<div class="dia_num"><span>200</span></div>
			</div>
		</div>
		<div class="col-sm-2 dia_to dia_margin">
			<div class="total">
				<div class="total_num"><span>100</span></div>
			</div>
			<div class="request_release" data-toggle="modal" data-target="#RUSure"><span>Release</span></div>
		</div>
    <div class="col-sm-2"></div>
	</div>

  <div class="row footer_title"><label>Pending</label></div>

        <div class="form-group form-inline sub-form-group left_align col-sm-6" style="margin-bottom: -100px;">
          <label for="company_pending" class="control-label " style="margin-left: 15px; ">Company Name:</label>
          <div class="input-group">               
              <input type="text" class="form-control" id="company_pending" name="company_pending">
              <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                   V
                  </button>
                  <ul class="dropdown-menu pull-right" id="com_pending_list">
                   
                  </ul>
              </div>
          </div>
        </div>
      <!-- <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
        <div class="row data_tbl"> -->
          <div class="col-sm-12 table-responsive">
            <table id="table_pending" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
              <thead>
                  <tr role="row">
                    <th width="30%">Company Name</th>
                    <th width="15%">Amount</th>
                    <th width="15%">Status</th>
                    <th width="20%">Date-Time</th>
                    <th width="20%">Options</th>
                  </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>
        <!-- </div>
      </div> -->

  <div class="row footer_title"><label>Paid</label></div>

      <div class="row">
        <div class="form-group form-inline sub-form-group left_align col-sm-4">
          <label for="company_paid" class="control-label ">Company Name:</label>
          <div class="input-group">               
              <input type="text" class="form-control" id="company_paid" name="company_paid">
              <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                   V
                  </button>
                  <ul class="dropdown-menu pull-right" id="com_paid_list">
                   
                  </ul>
              </div><!-- /btn-group -->
          </div>
        </div>
        <div class="form-group form-inline sub-form-group left_align col-sm-3">
          <label for="agent_paid" class="control-label ">Agent :</label>
          <div class="input-group">               
              <input type="text" class="form-control" name="agent_paid" id="agent_paid">
              <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                   V
                  </button>
                  <ul class="dropdown-menu pull-right ">
                   <li><a href="#">10</a></li>
                   <li><a href="#">20</a></li>
                   <li><a href="#">30</a></li>
                  </ul>
              </div><!-- /btn-group -->
          </div>
        </div>
        <div class="form-group form-inline show_align col-sm-3">
          <label for='date_from' class="control-label ">Date from :</label>
          <input type="date" name="date_from" id="from_paid" class="form-control" style="width: 160px;">
        </div>
        <div class="form-group form-inline left_align col-sm-2">
          <label for='date_to' class="control-label ">to :</label>
          <input type="date" name="date_to" id="to_paid" class="form-control" style="width: 160px;">
        </div>
      </div>

      <!-- <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
        <div class="row data_tbl"> -->
          <div class="col-sm-12 table-responsive">
            <table id="table_paid" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
              <thead>
                  <tr role="row">
                    <th width="5%"></th>
                    <th width="17%">Company Name</th>
                    <th width="14%">Client</th>
                    <th width="14%">Mobile no</th>
                    <th width="10%">Amount</th>
                    <th width="14%">Status</th>
                    <th width="14%">Date-Time</th>
                    <th width="12%">Options</th>
                  </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>
        <!-- </div>
      </div> -->

  <div class="row footer_title"><label>Direct Payment</label></div>

      <!-- <div class="row">
        <div class="form-group form-inline left_align col-sm-3">
          <label for='date_from' class="control-label ">Date from :</label>
          <input type="date" name="date_from" id="from_dir" class="form-control" style="width: 160px;">
        </div>
        <div class="form-group form-inline left_align col-sm-3">
          <label for='date_to' class="control-label ">to :</label>
          <input type="date" name="date_to" id="to_dir" class="form-control" style="width: 160px;">
        </div>
        <div class="form-group form-inline sub-form-group show_align col-sm-6">
          <label for="show_dir" class="control-label ">Show :</label>
          <div class="input-group">               
              <input type="text" class="form-control" name="show_dir" id="show_dir">
              <div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                   V
                  </button>
                  <ul class="dropdown-menu pull-right ">
                   <li><a href="#">10</a></li>
                   <li><a href="#">20</a></li>
                   <li><a href="#">30</a></li>
                  </ul>
              </div>
          </div>
        </div>
        
      </div> -->
      <div  style="margin-bottom: -100px;" class="col-sm-6">
        <div class="form-group form-inline left_align col-sm-6">
          <label for='date_from' class="control-label ">Date from :</label>
          <input type="date" name="date_from" id="from_dir" class="form-control" style="width: 160px;">
        </div>
        <div class="form-group form-inline left_align col-sm-6">
          <label for='date_to' class="control-label ">to :</label>
          <input type="date" name="date_to" id="to_dir" class="form-control" style="width: 160px;">
        </div>
      </div>
      <!-- <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
        <div class="row data_tbl"> -->
          <div class="col-sm-12 table-responsive">
            <table id="table_dir" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
              <thead>
                  <tr role="row">
                    <th width="25%">Payer</th>
                    <th width="25%">Payee</th>
                    <th width="10%">Amount</th>
                    <th width="14%">Status</th>
                    <th width="14%">Date-Time</th>
                    <th width="12%">Options</th>
                  </tr>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>
       <!--  </div>
      </div> -->

      <script type="text/javascript">
        var table_pending, table_paid, table_dir;
        var selectId;
        var role = -1;
        var comList;

        $(document).ready(function(){
            $.ajax({
              url: "<?php echo site_url('admin/index/get_com_list');?>",
              async: false,
              dataType: 'JSON',
              success: function(res){
                comList = res;
                  // $('#com_dia').val('--All--');
                  // document.getElementById("com_dia_list").innerHTML += '<li><a href="javascript:void(0);" id="com_dia_Record" class="com_dia_Record" data-val="--All--">--All--</a></li>';

                  $('#company_pending').val('--All--');
                  document.getElementById("com_pending_list").innerHTML += '<li><a href="javascript:void(0);" id="com_pending_Record" class="com_pending_Record" data-val="--All--">--All--</a></li>';

                  $('#company_paid').val('--All--');
                  document.getElementById("com_paid_list").innerHTML += '<li><a href="javascript:void(0);" id="com_paid_Record" class="com_paid_Record" data-val="--All--">--All--</a></li>';

                for(var i = 0; i < res.length; i++)
                {
                  $('#com_dia').val(res[0]['com_Name']);
                  document.getElementById("com_dia_list").innerHTML += '<li><a href="javascript:void(0);" id="com_dia_Record'+i+'" class="com_dia_Record" data-val="'+res[i]['com_Name']+'">'+res[i]['com_Name']+'</a></li>';

                  document.getElementById("com_pending_list").innerHTML += '<li><a href="javascript:void(0);" id="com_pending_Record'+i+'" class="com_pending_Record" data-val="'+res[i]['com_Name']+'">'+res[i]['com_Name']+'</a></li>';

                  document.getElementById("com_paid_list").innerHTML += '<li><a href="javascript:void(0);" id="com_paid_Record'+i+'" class="com_paid_Record" data-val="'+res[i]['com_Name']+'">'+res[i]['com_Name']+'</a></li>';
                }
              }
            });

            $(document).on('click', 'a.com_dia_Record', function(){
                $('#com_dia').val($(this).data('val'));
            });

            $(document).on('click', 'a.com_pending_Record', function(){
                $('#company_pending').val($(this).data('val'));
                table_pending.ajax.reload();
            });

            $(document).on('click', 'a.com_paid_Record', function(){
                $('#company_paid').val($(this).data('val'));
            });

            table_pending = $('#table_pending').DataTable({
                'processing': true,
                'serverSide': true,
                'pageLength': 10,
                'order': [],

                'ajax': {
                    'url': "<?php echo site_url('admin/index/get_pending');?>",
                    'data': function(d) {
                      d.com_Name = $('#company_pending').val() == '--All--' ? -1 : $('#company_pending').val();
                    },
                    'type': 'POST'
                },

                'initComplete': function(settings, json) {
                    var footer_height = $('#fixedfooter').height() + 200;
                    var header_height = $('.header-container').height() + footer_height;
                    if(header_height > screen.height - 50)
                    {
                        $('#fixedfooter').css({
                            'position': 'static',
                            'bottom': '0px',
                            'left': '0px',
                            'width': '100%'
                        });
                        $('.header-container').css('margin-bottom', 50);
                    }

                    $('#table_pending_length').parent().css('float', 'right');
                    $('#table_pending_length').css('text-align', 'right');
                    $('#table_pending_length').find('label').text('');

                    $('#table_pending_length').append('<div class="form-group form-inline sub-form-group"><label for="select_tbl_length" class="control-label">Show : </label><div class="input-group pull-right right_align"><input type="text" class="form-control pull-right" id="select_tbl_length" style="text-align : right;"><div class="input-group-btn"><button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false"> V </button><ul class="dropdown-menu pull-right"> <li><a class="select_tbl_record" data-val="10">10</a></li><li><a class="select_tbl_record" data-val="25">25</a></li><li><a class="select_tbl_record" data-val="50">50</a></li></ul></div></div></div>');
                    $('#select_tbl_length').val('10');
                },

                'columnDefs':[
                {
                    'targets': [-1],
                    'orderable': false
                }
                ],
                'searching': false
            });

            $(document).on('click', 'a.select_tbl_record', function(){
                $('#select_tbl_length').val($(this).data('val'));
                table.page.len($(this).data('val')).draw();
            });

            table_paid = $('#table_paid').DataTable({
                'processing': true,
                'serverSide': true,
                'pageLength': 10,
                'order': [],

                'ajax': {
                    'url': "<?php echo site_url('admin/index/get_paid');?>",
                    'data': function(d) {
                      d.com_Name = $('#company_paid').val() == '--All--' ? -1 : $('#company_paid').val();
                    },
                    'type': 'POST'
                },

                'initComplete': function(settings, json) {
                    var footer_height = $('#fixedfooter').height() + 200;
                    var header_height = $('.header-container').height() + footer_height;
                    if(header_height > screen.height - 50)
                    {
                        $('#fixedfooter').css({
                            'position': 'static',
                            'bottom': '0px',
                            'left': '0px',
                            'width': '100%'
                        });
                        $('.header-container').css('margin-bottom', 50);
                    }

                    $('#table_paid_length').parent().css('float', 'right');
                    $('#table_paid_length').css('text-align', 'right');
                    $('#table_paid_length').find('label').text('');

                    $('#table_paid_length').append('<div class="form-group form-inline sub-form-group"><label for="select_tbl_paid" class="control-label">Show : </label><div class="input-group pull-right right_align"><input type="text" class="form-control pull-right" id="select_tbl_paid" style="text-align : right;"><div class="input-group-btn"><button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false"> V </button><ul class="dropdown-menu pull-right"> <li><a class="paid_tbl_record" data-val="10">10</a></li><li><a class="paid_tbl_record" data-val="25">25</a></li><li><a class="paid_tbl_record" data-val="50">50</a></li></ul></div></div></div>');
                    $('#select_tbl_paid   ').val('10');
                },

                'columnDefs':[
                {
                    'targets': [-1],
                    'orderable': false
                }
                ],
                'searching': false
            });

            $(document).on('click', 'a.paid_tbl_record', function(){
                $('#select_tbl_paid').val($(this).data('val'));
                table.page.len($(this).data('val')).draw();
            });

            table_dir = $('#table_dir').DataTable({
                'processing': true,
                'serverSide': true,
                'pageLength': 10,
                'order': [],

                'ajax': {
                    'url': "<?php echo site_url('admin/index/get_dir');?>",
                    'data': function(d) {
                      // d.date_from = $('#from_dir').val();
                      // d.date_to = $('#to_dir').val();
                      d.date_from = '0000-00-00';
                      d.date_to = '0000-00-00';
                    },
                    'type': 'POST'
                },

                'initComplete': function(settings, json) {
                    var footer_height = $('#fixedfooter').height() + 200;
                    var header_height = $('.header-container').height() + footer_height;
                    if(header_height > screen.height - 50)
                    {
                        $('#fixedfooter').css({
                            'position': 'static',
                            'bottom': '0px',
                            'left': '0px',
                            'width': '100%'
                        });
                        $('.header-container').css('margin-bottom', 50);
                    }

                    $('#table_dir_length').parent().css('float', 'right');
                    $('#table_dir_length').css('text-align', 'right');
                    $('#table_dir_length').find('label').text('');

                    $('#table_dir_length').append('<div class="form-group form-inline sub-form-group"><label for="select_tbl_dir" class="control-label">Show : </label><div class="input-group pull-right right_align"><input type="text" class="form-control pull-right" id="select_tbl_dir" style="text-align : right;"><div class="input-group-btn"><button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false"> V </button><ul class="dropdown-menu pull-right"> <li><a class="dir_tbl_record" data-val="10">10</a></li><li><a class="dir_tbl_record" data-val="25">25</a></li><li><a class="dir_tbl_record" data-val="50">50</a></li></ul></div></div></div>');
                    $('#select_tbl_dir').val('10');
                },

                'columnDefs':[
                {
                    'targets': [-1],
                    'orderable': false
                }
                ],
                'searching': false
            });

            $(document).on('click', 'a.dir_tbl_record', function(){
                $('#select_tbl_dir').val($(this).data('val'));
                table.page.len($(this).data('val')).draw();
            });
      });
    </script>

	</div>

	<?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
