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
        <a href="<?php echo site_url('superuser/index/setting')?>"><button class="col-sm-3 btn btn_mid"><span>Manage Employee</span></button></a>
        <a href="<?php echo site_url('superuser/index/bank')?>"><button class="col-sm-3 btn btn_mid "><span>Bank Details & charges</span></button></a>
        <a href="<?php echo site_url('superuser/index/other_setting')?>"><button class="col-sm-3 btn btn_request active"><span>Other Settings</span></button></a>
    </div>
    
	<form>
        <div class="row bank_form">
            <div class="form-group col-md-5 sub-form">
                <!-- <div class="row"></div> -->
                <label for="sms_language">SMS Language:</label>
                <div class="input-group">               
                    <input type="text" class="form-control" id="sms_language" value="<?php echo $sms_language;?>">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                         V
                        </button>
                        <ul class="dropdown-menu pull-right" id="langList">
                         
                        </ul>
                    </div><!-- /btn-group -->
                </div>
                <div class="row_between">
                    <label for="sms_text">Custom SMS Text:</label>
                    <textarea class="form-control small-text" id="sms_text" placeholder=""></textarea>
                </div>
            </div>
        </div>
        
        <div class="row">
        <span class="col-md-5"></span>
        <button class="col-md-3 btn btn-default input-submit sms_update">
            <span>Update</span>
        </button>
        </div>

    </form>

    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
                type : 'POST',
                url : "<?php echo site_url('superuser/index/getLangList')?>",
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

            $('#sms_text').val("<?php echo $sms_text;?>");

            $('.sms_update').click(function(event){
                event.preventDefault();

                var sms_language = $('#sms_language').val();
                var sms_text = $('#sms_text').val();

                var data = {
                    sms_language : sms_language, sms_text : sms_text
                };

                $.ajax({
                    type : 'POST',
                    url : "<?php echo site_url('superuser/index/sms_update');?>",
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
