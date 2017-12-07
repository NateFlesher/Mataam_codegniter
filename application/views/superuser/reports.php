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
                <li><a href="<?php echo site_url('superuser/index')?>">Dashboard</a></li>
                <li><a href="<?php echo site_url('superuser/index/express_invoice')?>">Express Invoice</a></li>
                <li><a href="<?php echo site_url('superuser/index/clients')?>">Clients</a></li>
                <li class="active"><a href="<?php echo site_url('superuser/index/reports')?>">Reports</a></li>
                <li><a href="<?php echo site_url('superuser/index/setting')?>">Setting</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>

	<div class="row content_row">
		<div class="col-sm-12 upload_invoice_div">
			<button class="upload_invoice btn btn-default"><span>Export to Excel</span></button>
		</div>
	</div>


	<div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
	<div class="row content_row left_align">
    <div class="row">
		<div class="col-sm-6">
			<div id="table_filter1" class="dataTables_filter">
				<label for="agent">Agent:</label>
				<div class="input-group">               
                    <input type="text" class="form-control" id="agent">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                         V
                        </button>
                        <ul class="dropdown-menu pull-right" id="agent_list">
                         
                        </ul>
                    </div><!-- /btn-group -->
                </div>
			</div>
		</div>
		<div class="col-sm-3">
			<div id="table_filter1" class="dataTables_filter">
				<label for="date_from">Date from:</label>
				<div class="input-group">               
                    <input type="text" class="form-control" id="date_from">
                </div>
			</div>
		</div>
		<div class="col-sm-3">
			<div id="table_filter1" class="dataTables_filter">
				<label for="date_to">to:</label>
				<div class="input-group">               
                    <input type="text" class="form-control" id="date_to">
                </div>
			</div>
		</div>
        </div>
	</div>

	<div class="row content_row left_align">
    <div class="row">
        <div class="col-sm-6">
            <button class="btn btn-default btn_all">
                <span>All</span>
            </button>
            <button class="btn btn-default btn_company">
                <span>Company</span>
            </button>
            <button class="btn btn-default btn_paid">
                <span>Paid</span>
            </button>
            <button class="btn btn-default btn_unpaid">
                <span>Unpaid</span>
            </button>
            <button class="btn btn-default btn_pending">
                <span>Pending</span>
            </button>
            <button class="btn btn-default btn_deleted">
                <span>Deleted</span>
            </button>
            <button class="btn btn-default btn_completed">
                <span>Completed</span>
            </button>
        </div>
		<div class="col-sm-3">
			<div id="table_filter1" class="dataTables_filter">
				<label for="method_payment">Method of Payment:</label>
				<div class="input-group">               
                    <input type="text" class="form-control" id="method_payment">
                    <div class="input-group-btn" style="width: 34px !important;">
                        <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                         V
                        </button>
                        <ul class="dropdown-menu pull-right">
                         <li><a href="javascript:void(0);" id="methodPay0" class="methodPay" data-val="Debit">Debit</a></li>
                         <li><a href="javascript:void(0);" id="methodPay1" class="methodPay" data-val="Credit">Credit</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                </div>
			</div>
		</div>
		<div class="col-sm-3">
			<div id="table_filter1" class="dataTables_filter">
				<label for="payment_type">Payment Type:</label>
				<div class="input-group">               
                    <input type="text" class="form-control" id="payment_type">
                    <div class="input-group-btn" style="width: 34px !important;">
                        <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                         V
                        </button>
                        <ul class="dropdown-menu pull-right">
                         <li><a href="javascript:void(0);" id="payType0" class="payType" data-val="Paid">Paid</a></li>
                         <li><a href="javascript:void(0);" id="payType1" class="payType" data-val="Unpaid">Unpaid</a></li>
                         <li><a href="javascript:void(0);" id="payType2" class="payType" data-val="Pending">Pending</a></li>
                         <li><a href="javascript:void(0);" id="payType3" class="payType" data-val="Deleted">Deleted</a></li>
                         <li><a href="javascript:void(0);" id="payType4" class="payType" data-val="Completed">Completed</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                </div>
			</div>
		</div>
        </div>
	</div>

	<div class="row">

		<!-- <div class="col-sm-3" style="text-align: left;">
			<div id="table_filter" class="dataTables_filter">
				<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="table"></label>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="dataTables_length" id="table_length">
				<label>Show 
					<select name="table_length" aria-controls="table" class="form-control input-sm">
						<option value="10">10</option>
						<option value="25">25</option>
						<option value="50">50</option>
						<option value="100">100</option>
					</select> 
				</label>
			</div>
		</div> -->
	</div>

<!-- 	<div class="row data_tbl"> -->
		<div class="col-sm-12 table-responsive">
			<table id="table" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
            <thead>
                <tr role="">
                	<th width="10%">Agent</th>
                	<th width="10%">Client</th>
                	<th width="10%">Mobile no.</th>
                	<th width="9%">Amount</th>
                	<th width="10%">Method of Payment</th>
                	<th width="10%">Payment Type</th>
                	<th width="15%">Status</th>
                	<th width="10%">Date-Time</th>
                	<th width="26%">Options</th>
                </tr>
            </thead>
            <tbody>
            	
            </tbody>
        	</table>
     	</div>
    <!-- </div> -->

	</div>

	<?php include 'yes_no.html'; ?>

    <script type="text/javascript">
        var table;
        var selectId;
        var role = -1;

        $(document).ready(function(){
            table = $('#table').DataTable({
                'processing': true,
                'serverSide': true,
                'pageLength': 10,
                'order': [],

                'ajax': {
                    'url': '<?php echo site_url('superuser/index/get_report');?>',
                    'type': 'POST'
                },

                'initComplete': function(settings, json) {
                    var footer_height = $('#fixedfooter').height() + 100;
                    //footer_height = screen.height > 950 ? footer_height + 150 : footer_height + 80;
                    var header_height = $('.header-container').height() + footer_height + $('#fixedfooter').height();
                    //if(header_height < screen.height)
                    if(header_height > screen.height)
                    {
                        $('#fixedfooter').css({
                            'position': 'static',
                            'bottom': '0px',
                            'left': '0px',
                            'width': '100%'
                        });
                        $('.header-container').css('margin-bottom', $('#fixedfooter').height());
                    }
                    $('#table_length').parent().css('float', 'right');
                        $('#table_length').css('text-align', 'right');
                        $('#table_filter').css('float', 'left');
                        $('#table_length').find('label').text('');

                        $('#table_length').append('<div class="form-group form-inline sub-form-group"><label for="select_tbl_length" class="control-label">Show : </label><div class="input-group pull-right right_align"><input type="text" class="form-control pull-right" id="select_tbl_length" style="text-align : right;"><div class="input-group-btn"><button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false"> V </button><ul class="dropdown-menu pull-right"> <li><a class="select_tbl_record" data-val="10">10</a></li><li><a class="select_tbl_record" data-val="25">25</a></li><li><a class="select_tbl_record" data-val="50">50</a></li></ul></div></div></div>');
                        $('#select_tbl_length').val('10');
                    },

                    'columnDefs':[
                    {
                        'targets': [-1],
                        'orderable': false
                    }
                    ],
                    'searching': true
                });

                $(document).on('click', 'a.select_tbl_record', function(){
                    //alert($(this).data('val'));
                    $('#select_tbl_length').val($(this).data('val'));
                    table.page.len($(this).data('val')).draw();
                });

            $.ajax({
                type : 'POST',
                url : "<?php echo site_url('superuser/index/getAgentList')?>",
                dataType : 'json',
                success : function(res){
                    
                    for(var i = 0; i < res.length; i++)
                    {
                        console.log(res[i][1]);
                        document.getElementById("agent_list").innerHTML += '<li><a href="javascript:void(0);" id="agentRecord'+i+'" class="agentRecord" data-val="'+res[i][1]+'">'+res[i][1]+'</a></li>';
                    }
                }
            })

            $(document).on('click', 'a.agentRecord', function(){
                //alert($(this).data('val'));
                $('#agent').val($(this).data('val'));
            });

            $(document).on('click', 'a.methodPay', function(){
                $('#method_payment').val($(this).data('val'));
            });

            $(document).on('click', 'a.payType', function(){
                $('#payment_type').val($(this).data('val'));
            });

            $('.btn_paid').click(function(){
                // $('#table').DataTable({
                //     'processing': true,
                //     'serverSide': true,
                //     'pageLength': 10,
                //     'order': [],

                //     'ajax': {
                //         'url': '<?php echo site_url('superuser/index/get_report');?>',
                //         'type': 'POST'
                //     },

                //     'columnDefs':[
                //     {
                //         'targets': [-1],
                //         'orderable': false
                //     }
                //     ],
                //     'searching': true
                // });
            });
        });

        function reload_table()
        {
            table.ajax.reload(null, false);
        }

        function delete_client(id)
        {
            $('#yes_no').modal('show');

            selectId = id;
        }

        function save()     //delete_emp
        {
            $.ajax({
                url: "<?php echo site_url('superuser/index/report_delete')?>/" + selectId,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                    $('#yes_no').modal('hide');
                    reload_table();
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            })
        }
    </script>

    </div>

    <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
