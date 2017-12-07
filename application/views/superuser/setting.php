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
                <li><a href="<?php echo site_url('superuser/index/reports')?>">Reports</a></li>
                <li class="active"><a href="<?php echo site_url('superuser/index/setting')?>">Setting</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>

    <div class="row twin_btn">
        <a href="<?php echo site_url('superuser/index/company_profile')?>"><button class="col-sm-3 btn btn_send"><span>Company Profile</span></button></a>
        <a href="<?php echo site_url('superuser/index/setting')?>"><button class="col-sm-3 btn btn_mid active"><span>Manage Employee</span></button></a>
        <a href="<?php echo site_url('superuser/index/bank')?>"><button class="col-sm-3 btn btn_mid "><span>Bank Details & charges</span></button></a>
        <a href="<?php echo site_url('superuser/index/other_setting')?>"><button class="col-sm-3 btn btn_request"><span>Other Settings</span></button></a>
    </div>
    
	<div class="row">
		<div class="col-sm-12 addEmployment_div">
		  <button class="addEmployment btn btn-default"><span> + Add Employee</span></button>
        </div>
	</div>

	<!-- <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
		<div class="col-sm-6 search_field">
			<div id="table_filter" class="dataTables_filter">
				<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="table"></label>
			</div>
		</div>
		<div class="col-sm-6 drop_field">
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
	</div> -->

	<div class="row data_tbl">
		<div class="col-sm-12 table-responsive">
			<table id="table" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="table_info" style="width: 100%;">
            <thead>
                <tr role="row">
                	<th width="20%">Name</th>
                	<th width="15%">Mobile</th>
                	<th width="20%">Email</th>
                	<th width="15%">Role</th>
                	<th width="20%">Options</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        	</table>
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
                        'url': '<?php echo site_url('superuser/index/get_emp');?>',
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

            function reset_emp(id)
            {
                $('#reset_psw').modal('show');
                selectId = id;
            }
            
            function psw_update()       //reset_emp
            {
                if($('#new_psw').val() != $('#confirm_new_psw').val())
                {
                    alert('password is not match!. please try again.');
                    return;
                }
                $.ajax({
                    url: "<?php echo site_url('superuser/index/emp_reset_psw')?>",
                    data: 'id=' + selectId + '&psw=' + $('#new_psw').val(),
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        $('#reset_psw').modal('hide');
                        reload_table();
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                        alert('Error reset password');
                    }
                })
            }

            function edit_emp(id)
            {
                selectId = id;

                $.ajax({
                    url: "<?php echo site_url('superuser/index/emp_show')?>/" + selectId,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        $('[name="agent_name"]').val(data.agentName);
                        $('[name="mobile_no"]').val(data.mobile);
                        $('[name="email_address"]').val(data.email);
                        
                        switch(data.role)
                        {
                            case '0':
                                $('#role_up').prop('checked', true);
                                break;
                            case '1':
                                $('#role_mid').prop('checked', true);
                                break;
                            case '2':
                                $('#role_down').prop('checked', true);
                                break;
                        }
                        //reload_table();
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                        alert('Error showing data');
                    }
                });

                $('#editEmp').modal('show');
            }

            function emp_edit()
            {
                role = $('input[name=role]:checked').val() == 'role_up' ? 0 : $('input[name=role]:checked').val() == 'role_mid' ? 1 : $('input[name=role]:checked').val() == 'role_down' ? 2 : -1;
                
                $.ajax({
                    url: "<?php echo site_url('superuser/index/emp_edit')?>",
                    data: 'id=' + selectId + '&agentName=' + $('[name="agent_name"]').val() + '&mobile=' + $('[name="mobile_no"]').val() + '&email=' + $('[name="email_address"]').val() + '&role=' + role,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        $('#editEmp').modal('hide');
                        role = -1;
                        reload_table();
                    },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                        alert('Error updating data');
                    }
                })
            }

            function delete_emp(id)
            {
                $('#yes_no').modal('show');

                selectId = id;
            }

            function save()     //delete_emp
            {
                $.ajax({
                    url: "<?php echo site_url('superuser/index/emp_delete')?>/" + selectId,
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

            function reload_table()
            {
                table.ajax.reload(null, false);
            }
        </script>

        <?php include 'reset_psw.html';?>
        <?php include 'addEmployment.html';?>
        <?php include 'yes_no.html'; ?>
        <?php include 'editEmp.html'; ?>      
    </div>

    <?php include './asset/template/footer/common_footer.php'?>
    
</body>
</html>
