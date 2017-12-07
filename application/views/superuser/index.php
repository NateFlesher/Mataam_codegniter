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
              	<li class="active"><a href="<?php echo site_url('superuser/index')?>">Dashboard</a></li>
				<li><a href="<?php echo site_url('superuser/index/express_invoice')?>">Express Invoice</a></li>
				<li><a href="<?php echo site_url('superuser/index/clients')?>">Clients</a></li>
				<li><a href="<?php echo site_url('superuser/index/reports')?>">Reports</a></li>
				<li><a href="<?php echo site_url('superuser/index/setting')?>">Setting</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
		</div>
    </nav>

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
				<div class="dia_num"><span>100</span></div>
			</div>
			<div class="request" data-toggle="modal" data-target="#RUSure"></div>
		</div>
	</div>

		<!-- Modal -->
		<div class="modal fade" id="RUSure" role="dialog">
			<div class="modal-dialog sure_modal">

			  <!-- Modal content-->
			  <div class="modal-content">
			    <div class="modal-body">
			      	<span class="sure_ques">Are you sure ?</span>
			    	
			    	<div class='action_btn'>
			    		<button class="no_btn" data-dismiss="modal">No</button>
			      		<button class="yes_btn" onclick="save()">Yes</button>
			    	</div>
			    </div>
			  </div>
			  
			</div>
		</div>

	<div class="tran_text" style="margin-left: 25px;"><span>Transactions</span></div>

	<div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
	<div class="row">
		<div class="col-sm-6">
			<button class="btn btn-default btn_all">
		    	<span>All</span>
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
		    <button class="btn btn-default btn_deleted1">
		    	<span>Deleted</span>
		    </button>
		</div>
		<!-- <div class="col-sm-3">
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

	<div class="row data_tbl">
		<div class="col-sm-12 table-responsive">
			<table id="table" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
            <thead>
                <tr role="row">
                	<th width="15%">Agent</th>
                	<th width="15%">Client</th>
                	<th width="15%">Mobile no.</th>
                	<th width="13%">Amount</th>
                	<th width="13%">Status</th>
                	<th width="13%">Date-Time</th>
                	<th width="16%">Options</th>
                </tr>
            </thead>
            <tbody>
            	
            </tbody>
        	</table>
     	</div>
    </div>

	</div>
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
                    'url': '<?php echo site_url('superuser/index/get_transaction');?>',
                    'type': 'POST'
                },

                'initComplete': function(settings, json) {
                    var footer_height = $('#fixedfooter').height() + 200;
                    //footer_height = screen.height > 950 ? footer_height + 150 : footer_height + 80;
                    var header_height = $('.header-container').height() + footer_height;
                    //if(header_height < screen.height)
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
        });

        function reload_table()
        {
            table.ajax.reload(null, false);
        }

        function delete_tran(id)
        {
            $('#RUSure').modal('show');

            selectId = id;
        }

        function save()     //delete_emp
        {
            $.ajax({
                url: "<?php echo site_url('superuser/index/tran_delete')?>/" + selectId,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {
                    $('#RUSure').modal('hide');
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
