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
                <li class="active"><a href="<?php echo site_url('admin/index')?>">Footer</a></li>
                <li><a href="<?php echo site_url('admin/index/z8_1_home_main')?>">Homepage</a></li>
                <li><a href="<?php echo site_url('admin/index/z6_1_report')?>">Reports</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
        <div class="menu-bar">
        </div>
    </nav>
    
    <div class="row twin_btn1">
        <a href="<?php echo site_url('admin/index')?>"><button class="col-sm-2 btn btn_send"><span>About Us</span></button></a>
        <a href="<?php echo site_url('admin/index/z7_2_privacy_pol')?>"><button class="col-sm-2 btn btn_mid"><span>Privacy Policy</span></button></a>
        <a href="<?php echo site_url('admin/index/z7_3_terms_condition')?>"><button class="col-sm-3 btn btn_mid"><span>Terms & Coditions</span></button></a>
        <a href="<?php echo site_url('admin/index/z7_4_contactus')?>"><button class="col-sm-2 btn btn_mid active"><span>Cotact Us</span></button></a>
        <a href="<?php echo site_url('admin/index/z7_5_career')?>"><button class="col-sm-2 btn btn_request"><span>Career</span></button></a>
    </div>

    <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
    <!-- <div class="row">
        <div class="col-sm-12 drop_right_align">
            <div class="dataTables_length" id="table_length">
                <label>Show 
                    <select name="table_length" aria-controls="table" class="form-control input-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
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
                    <th width="15%">Name</th>
                    <th width="15%">Mobile no</th>
                    <th width="15%">Email</th>
                    <th width="25%">Message</th>
                    <th width="15%">Date - Time</th>
                    <th width="15%">Options</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr role="row" class="odd">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="javascript:void(0)" title="view" class='view'>
                            <img src="<?php echo base_url(); ?>asset/images/view.png">
                        </a> 
                        <a href="javascript:void(0)" title="delete" class="delete">
                            <img src="<?php echo base_url(); ?>asset/images/delete.png" />
                        </a> 
                    </td>
                </tr> -->
            </tbody>
            </table>
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
                        'url': '<?php echo site_url('footer/index/get_contactus');?>',
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
                    'searching': false
                });

                $(document).on('click', 'a.select_tbl_record', function(){
                    //alert($(this).data('val'));
                    $('#select_tbl_length').val($(this).data('val'));
                    table.page.len($(this).data('val')).draw();
                });

        })
    </script>

    </div>

    <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
