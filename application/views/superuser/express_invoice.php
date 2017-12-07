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
				<li class="active"><a href="<?php echo site_url('superuser/index/express_invoice')?>">Express Invoice</a></li>
				<li><a href="<?php echo site_url('superuser/index/clients')?>">Clients</a></li>
				<li><a href="<?php echo site_url('superuser/index/reports')?>">Reports</a></li>
				<li><a href="<?php echo site_url('superuser/index/setting')?>">Setting</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>
	<div class="row">
		<div class="col-sm-12 upload_invoice_div">
			<button class="upload_invoice btn btn-default"><span>Upload Mass Invoices</span></button>
		</div>
	</div>

	<div class="row content">
		<div class="col-sm-5">
			<div class="left_content">
				<form>
				    <div class="form-group form_style">
				    	<span class="form_text">Mobile Number :</span>
				      	<div>
							<input class="form-control form_input form_input1" id="country_no">
					      	<input class="form-control form_input form_input2" id="mobile_no">
				      	</div>

				      	<span class="form_text">Client Name :</span>
				      	<input class="form-control form_input" id="client_name">

				      	<span class="form_text">Email Address : </span><span>"optional"</span>
				      	<input type='email' class="form-control form_input" id="email_address">

				      	<div class="radio" style="margin-left: 10px;">
							<label class="input-radio"><input type="radio" name="optradio"><span class="form_text">Save Client</span></label>
						</div>
				    </div>
		  		</form>
			</div>
		</div>
		<div class="col-sm-7">
			<div class="right_content">
				<div class="invoice_detail"><span>Invoice Details :</span></div>

				<div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
					<div class="row data_tbl">
						<div class="col-sm-12 table-responsive">
							<table id="table_invoice" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
				            <thead>
				                <tr role="row">
				                	<th width="5%"></th>
				                	<th width="20%">Description</th>
				                	<th width="15%">Quantity</th>
				                	<th width="15%">Unit Price</th>
				                	<th width="20%">Total Price</th>
				                	<th width="25%">Options</th>
				                </tr>
				            </thead>
				            <tbody>
				            	<tr role="row" class="odd">
				            		<td>
				            			<a href="javascript:void(0)" title="pulus" onclick="pulus_invoice()">
				            				<img src="<?php echo base_url(); ?>asset/images/pulus.png" />
				            			</a> 
				            		</td>
				            		<td>LG TV 50 inch</td>
				            		<td>2</td>
				            		<td>50 LE</td>
				            		<td>100 LE</td>
				            		<td>
				            			<a href="javascript:void(0)" title="copy" onclick="copy_invoice()">
				            				<img src="<?php echo base_url(); ?>asset/images/copy.png" class="tbl_btn tbl_copy"/>
				            			</a> 
				            			<a href="javascript:void(0)" title="save" onclick="save_invoice()">
				            				<img src="<?php echo base_url(); ?>asset/images/save.png" class="tbl_btn tbl_save"/>
				            			</a> 
				            			<a href="javascript:void(0)" title="delete" onclick="delete_invoice()">
				            				<img src="<?php echo base_url(); ?>asset/images/delete.png" class="tbl_btn tbl_delete"/>
				            			</a> 
				            		</td>
				            	</tr>
				            	<tr role="row" class="odd">
				            		<td>
				            			<a href="javascript:void(0)" title="aaa" onclick="duplicate_project('172')">
				            				<img src="<?php echo base_url(); ?>asset/images/pulus.png" class="tbl_btn"/>
				            			</a> 
				            		</td>
				            		<td>HP Laptop</td>
				            		<td>1</td>
				            		<td>50 LE</td>
				            		<td>50 LE</td>
				            		<td>
				            			<a href="javascript:void(0)" title="aaa" onclick="duplicate_project('172')">
				            				<img src="<?php echo base_url(); ?>asset/images/copy.png" class="tbl_btn tbl_copy"/>
				            			</a> 
				            			<a href="javascript:void(0)" title="aaa" onclick="duplicate_project('172')">
				            				<img src="<?php echo base_url(); ?>asset/images/save.png" class="tbl_btn tbl_save"/>
				            			</a> 
				            			<a href="javascript:void(0)" title="aaa" class="delete">
				            				<img src="<?php echo base_url(); ?>asset/images/delete.png" class="tbl_btn tbl_delete"/>
				            			</a> 
				            		</td>
				            	</tr>
				            	<tr role="row" class="odd">
				            		<td colspan="2" class="tbl_total">Total :</td>
				            		<td colspan="4" class="tbl_total">150 LE</td>
				            	</tr>
				            </tbody>
				        	</table>
				     	</div>
				    </div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12">
		<div class="sendinvoice_later">
			<button class="sendinvoice btn btn-default"><span>Send Invoice</span></button>
			<button class="later btn btn-default"><span>Later</span></button>
		</div>
	</div>
	
	<?php include 'uploadinvoice.html'; ?>
	<?php include 'yes_no.html'; ?>

	<div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
	<div class="row">
		<div class="col-sm-6 filter_btn">
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
		<!-- <div class="col-sm-3 filter_btn">
			<div id="table_filter" class="dataTables_filter">
				<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="table"></label>
			</div>
		</div>
		<div class="col-sm-3 filter_btn">
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
            $('#yes_no').modal('show');

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
