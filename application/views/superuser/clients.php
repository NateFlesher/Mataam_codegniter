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
                <li class="active"><a href="<?php echo site_url('superuser/index/clients')?>">Clients</a></li>
                <li><a href="<?php echo site_url('superuser/index/reports')?>">Reports</a></li>
                <li><a href="<?php echo site_url('superuser/index/setting')?>">Setting</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>

	<div class="row">
		<div class="col-sm-12 addClients_div">
		  <button class="btn btn-default addClients"><span> + Add Client</span></button>
        </div>
	</div>

	<!-- <div class="data_tbl"> -->
		<div class="col-sm-12 table-responsive">
			<table id="table" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
            <thead>
                <tr role="row">
                	<th width="20%">Name</th>
                	<th width="20%">Mobile</th>
                	<th width="20%">Email</th>
                	<th width="20%">Address</th>
                	<th width="20%">Options</th>
                </tr>
            </thead>
            <tbody>
            	
            </tbody>
        	</table>
     	</div>
    <!-- </div> -->

        <?php include 'invoicelist.html';?>
        <?php include 'addClient.html';?>
        <?php include 'yes_no.html'; ?>
        <?php include 'editClient.html'; ?>

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
                    'url': '<?php echo site_url('superuser/index/get_client');?>',
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

        function delete_client(id)
        {
            $('#yes_no').modal('show');

            selectId = id;
        }

        function save()     //delete_emp
        {
            $.ajax({
                url: "<?php echo site_url('superuser/index/delete_client')?>/" + selectId,
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

        function invoicelist(id)
        {
            $('#invoicelist').modal('show');
            selectId = id;
        }

        function createInvoice()
        {
            
        }
    </script>

    </div>

    <?php include './asset/template/footer/common_footer.php'?> 

</body>
</html>
