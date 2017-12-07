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
            	<li class="active"><a href="<?php echo site_url('customer/index')?>">Dashboard</a></li>
      				<li><a href="<?php echo site_url('customer/index/payment')?>">Direct Payment</a></li>
      				<li><a href="<?php echo site_url('customer/index/TransactionReport')?>">Transaction and Reports</a></li>
      				<li><a href="<?php echo site_url('customer/index/setting')?>">Setting</a></li>
      				<li><a href="<?php echo site_url('customer/index/wallet')?>">Wallet</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>

	<div class="content">
	<div class="row diagram"> 
		<div class="col-sm-3 dia_col dia_margin">
			<div class="collect_Amount">
				<div class="dia_num"><span>330</span></div>
				<div class="dia_num"><span>500</span></div>
			</div>
		</div>
		<div class="col-sm-3 dia_pai dia_margin">
			<div class="paid_Amount">
				<div class="dia_num"><span>600</span></div>
				<div class="dia_num"><span>900</span></div>
			</div>
		</div>
		<div class="col-sm-3 dia_ba dia_margin">
			<div class="balance">
				<div class="dia_num"><span></span></div>
				<div class="dia_num"><span>2000</span></div>
			</div>
		</div>

	  </div>
	  <div class="row diagram"> 
		<div class="col-sm-3 dia_pen dia_margin">
			<div class="Pending_Collection">
				<div class="dia_num"><span></span></div>
				<div class="dia_num"><span>2000</span></div>
			</div>
		</div>
		<div class="col-sm-3 dia_req dia_margin">
			<div class="Request_Collection">
				<div class="dia_num"><span></span></div>
				<div class="dia_num"><span>2000</span></div>
			</div>
		</div>
		<div class="col-sm-3 dia_wth dia_margin">
			<div class="dia_num"></div>
			<div class="WithDraw">
			</div>
		</div>

	  </div>
	</div>
	<div class="tran_text" style="margin-left: 15px;"><span>Transactions</span></div>

	<div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
	
		<div class="col-sm-12 table-responsive">
			<table id="table" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%; background-color: #efefef">
            <thead>
                <tr role="row">
                	<th width="12%">Date-Time</th>
                	<th width="12%">Name</th>
                	<th width="12%">Type</th>
                	<th width="16%">Description</th>
                	<th width="12%">Amount </th>
                	<th width="12%">Fees</th>
                	<th width="12%">Net</th>
                	<th width="12%">Balance</th>
                </tr>
            </thead>
            <tbody>
            	
            </tbody>
        	</table>

     	</div>

	

	<div class="row"><div class="row">
	<div class="viewmore">
		<button class="btn btn-default input-submit">
	    	View More
	    </button>
	</div></div>
	</div>
    
</div>
    </div>

    <script type="text/javascript">
        var table;
        $(document).ready(function(){
            table = $('#table').DataTable({
                'processing': true,
                'serverSide': true,
                'pageLength': 10,
                'order': [],

                'ajax': {
                    'url': "<?php echo site_url('customer/index/get_transaction');?>",
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

                    $('#table_length').find('label').text('');
                },

                'columnDefs':[
                {
                    'targets': [-1],
                    'orderable': false
                }
                ],
                'searching': false
            });
        });
    </script>

    <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
