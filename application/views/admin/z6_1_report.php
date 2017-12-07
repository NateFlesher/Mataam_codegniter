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
                <li><a href="<?php echo site_url('admin/index/z4_5_mc_overview')?>">Manage Companies</a></li>
                <li><a href="<?php echo site_url('admin/index/z5_1_sms_setup')?>">Master Setup</a></li>
                <li><a href="<?php echo site_url('admin/index')?>">Footer</a></li>
                <li><a href="<?php echo site_url('admin/index/z8_1_home_main')?>">Homepage</a></li>
                <li class="active"><a href="<?php echo site_url('admin/index/z6_1_report')?>">Reports</a></li>
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
		<div class="col-sm-4">
			<div id="table_filter" class="dataTables_filter">
				<label for="company_name">Company Name:</label>
				<div class="input-group">               
                    <input type="text" class="form-control" id="company_name">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                         V
                        </button>
                        <ul class="dropdown-menu pull-right">
                         <li><a href="#">Bank</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                </div>
			</div>
		</div>
		<div class="col-sm-4">
			<div id="table_filter" class="dataTables_filter">
				<label for="agent">Agent:</label>
				<div class="input-group">               
                    <input type="text" class="form-control" id="agent">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                         V
                        </button>
                        <ul class="dropdown-menu pull-right">
                         <li><a href="#">Bank</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                </div>
			</div>
		</div>
		<div class="col-sm-2">
			<div id="table_filter" class="dataTables_filter">
				<label for="date_from">Date from:</label>
				<div class="input-group">               
                    <input type="text" class="form-control" id="date_from">
                </div>
			</div>
		</div>
		<div class="col-sm-2">
			<div id="table_filter" class="dataTables_filter">
				<label for="date_to">to:</label>
				<div class="input-group">               
                    <input type="text" class="form-control" id="date_to">
                </div>
			</div>
		</div>
	</div>

	<div class="row content_row left_align">
		<div class="col-sm-6">
			<div id="table_filter" class="dataTables_filter">
				<label for="method_payment">Method of Payment:</label>
				<div class="input-group">               
                    <input type="text" class="form-control" id="method_payment">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                         V
                        </button>
                        <ul class="dropdown-menu pull-right">
                         <li><a href="#">Bank</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                </div>
			</div>
		</div>
		<div class="col-sm-6">
			<div id="table_filter" class="dataTables_filter">
				<label for="payment_type">Payment Type:</label>
				<div class="input-group">               
                    <input type="text" class="form-control" id="payment_type">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                         V
                        </button>
                        <ul class="dropdown-menu pull-right">
                         <li><a href="#">Bank</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                </div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 filter_btn">
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

		<div class="col-sm-3 filter_btn" style="text-align: left;">
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
		</div>
	</div>

	<div class="row data_tbl">
		<div class="col-sm-12 table-responsive">
			<table id="table" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
            <thead>
                <tr role="row">
                    <th width="12%">Company name</th>
                	<th width="9%">Agent</th>
                	<th width="9%">Client</th>
                	<th width="9%">Mobile no.</th>
                	<th width="9%">Amount</th>
                	<th width="9%">Method of Payment</th>
                	<th width="9%">Payment Type</th>
                	<th width="12%">Status</th>
                	<th width="8%">Date-Time</th>
                	<th width="19%">Options</th>
                </tr>
            </thead>
            <tbody>
            	<tr role="row" class="odd">
                    <td>1</td>
            		<td>1</td>
            		<td>2</td>
            		<td>3</td>
            		<td>4</td>
            		<td>
            			<div class="debit">Debit</div>
            		</td>
            		<td>
            			<div class="invoice">Invoice</div>
            		</td>
            		<td>
            			<div class="paid">Paid</div>
            			<div class="paid_num">1</div>
            		</td>
            		<td>6</td>
            		<td>
            			<a href="javascript:void(0)" title="view" class="view">
            				<img src="<?php echo base_url(); ?>asset/images/view.png" class='tbl_btn tbl_view'/>
            			</a> 
            			<a href="javascript:void(0)" title="download" class="download">
            				<img src="<?php echo base_url(); ?>asset/images/download.png" class='tbl_btn tbl_down'/>
            			</a> 
            			<a href="javascript:void(0)" title="delete" class="delete">
            				<img src="<?php echo base_url(); ?>asset/images/delete.png" class='tbl_btn tbl_delete'/>
            			</a> 
            		</td>
            	</tr>
            	<tr role="row" class="odd">
                    <td>1</td>
            		<td>1</td>
            		<td>2</td>
            		<td>3</td>
            		<td>4</td>
            		<td>
            			<div class="credit">Credit</div>
            		</td>
            		<td>
            			<div class="directpay">DirectPay</div>
            		</td>
            		<td>
            			<div class="unpaid">Unpaid</div>
            			<div class="unpaid_num">1</div>
            		</td>
            		<td>6</td>
            		<td>
            			<a href="javascript:void(0)" title="view" class="view">
            				<img src="<?php echo base_url(); ?>asset/images/view.png" class='tbl_btn tbl_view'/>
            			</a> 
            			<a href="javascript:void(0)" title="download" class="download">
            				<img src="<?php echo base_url(); ?>asset/images/download.png" class='tbl_btn tbl_down'/>
            			</a> 
            			<a href="javascript:void(0)" title="delete" class="delete">
            				<img src="<?php echo base_url(); ?>asset/images/delete.png" class='tbl_btn tbl_delete'/>
            			</a> 
            		</td>
            	</tr>
            	<tr role="row" class="odd">
                    <td>1</td>
            		<td>1</td>
            		<td>2</td>
            		<td>3</td>
            		<td>4</td>
            		<td>
            			<div class="debit">Debit</div>
            		</td>
            		<td>
            			<div class="invoice">Invoice</div>
            		</td>
            		<td>
            			<div class="deleted">Deleted</div>
            			<div class="deleted_num">1</div>
            		</td>
            		<td>6</td>
            		<td>
            			<a href="javascript:void(0)" title="view" class="view">
            				<img src="<?php echo base_url(); ?>asset/images/view.png" class='tbl_btn tbl_view'/>
            			</a> 
            			<a href="javascript:void(0)" title="download" class="download">
            				<img src="<?php echo base_url(); ?>asset/images/download.png" class='tbl_btn tbl_down'/>
            			</a> 
            			<a href="javascript:void(0)" title="delete" class="delete">
            				<img src="<?php echo base_url(); ?>asset/images/delete.png" class='tbl_btn tbl_delete' />
            			</a> 
            		</td>
            	</tr>
            	<tr role="row" class="odd">
                    <td>1</td>
            		<td>1</td>
            		<td>2</td>
            		<td>3</td>
            		<td>4</td>
            		<td>
            			<div class="debit">Debit</div>
            		</td>
            		<td>
            			<div class="invoice">Invoice</div>
            		</td>
            		<td>
            			<div class="pending">Pending</div>
            			<div class="pending_num">0</div>
            		</td>
            		<td>6</td>
            		<td>
            			<a href="javascript:void(0)" title="view" class="view">
            				<img src="<?php echo base_url(); ?>asset/images/view.png" class='tbl_btn tbl_view'/>
            			</a> 
            			<a href="javascript:void(0)" title="download" class="download">
            				<img src="<?php echo base_url(); ?>asset/images/download.png" class='tbl_btn tbl_down'/>
            			</a> 
            			<a href="javascript:void(0)" title="delete" class="delete">
            				<img src="<?php echo base_url(); ?>asset/images/delete.png" class='tbl_btn tbl_delete'/>
            			</a> 
            		</td>
            	</tr>
            	<tr role="row" class="odd">
                    <td>1</td>
            		<td>1</td>
            		<td>2</td>
            		<td>3</td>
            		<td>4</td>
            		<td>
            			<div class="debit">Debit</div>
            		</td>
            		<td>
            			<div class="invoice">Invoice</div>
            		</td>
            		<td>
            			<div class="completed">Completed</div>
            		</td>
            		<td>6</td>
            		<td>
            			<a href="javascript:void(0)" title="view" class="view">
            				<img src="<?php echo base_url(); ?>asset/images/view.png" class='tbl_btn tbl_view'/>
            			</a> 
            			<a href="javascript:void(0)" title="download" class="download">
            				<img src="<?php echo base_url(); ?>asset/images/download.png" class='tbl_btn tbl_down'/>
            			</a> 
            			<a href="javascript:void(0)" title="delete" class="delete">
            				<img src="<?php echo base_url(); ?>asset/images/delete.png" class='tbl_btn tbl_delete'/>
            			</a> 
            		</td>
            	</tr>
            </tbody>
        	</table>
     	</div>
    </div>

    <div class="row">
    	<div class="col-sm-12">
    		<div class="dataTables_paginate paging_simple_numbers" id="table_paginate">
    			<ul class="pagination">
    				<li class="paginate_button previous disabled" id="table_previous">
    					<a href="#" aria-controls="table" data-dt-idx="0" tabindex="0">Previous</a>
    				</li>
    				<li class="paginate_button active">
    					<a href="#" aria-controls="table" data-dt-idx="1" tabindex="0">1</a>
    				</li>
    				<li class="paginate_button next disabled" id="table_next">
    					<a href="#" aria-controls="table" data-dt-idx="2" tabindex="0">Next</a>
    				</li>
    			</ul>
    		</div>
    	</div>
    </div>
	</div>

	<?php include 'dialog/yes_no.html'; ?>

    </div>

    <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
