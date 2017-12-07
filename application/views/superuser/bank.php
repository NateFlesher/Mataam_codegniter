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
        <a href="<?php echo site_url('superuser/index/bank')?>"><button class="col-sm-3 btn btn_mid  active"><span>Bank Details & charges</span></button></a>
        <a href="<?php echo site_url('superuser/index/other_setting')?>"><button class="col-sm-3 btn btn_request"><span>Other Settings</span></button></a>
    </div>
  

	<form>
        <div class="row bank_form">
        <div class="form-group col-md-1"></div>
        <div class="form-group col-md-5 sub-form">
            <label for="acc_holder_name" class="label_margin">Account Holder Name:</label>
            <input type="text" class="form-control" id="acc_holder_name" name="accHolderName" value="<?php echo $accHolderName;?>">

            <label for="bank_name" class="label_margin">Bank Name:</label>
            <div class="input-group">               
                <input type="text" class="form-control" id="bank_name">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                     V
                    </button>
                    <ul class="dropdown-menu pull-right bankList" id="bankList">
                    </ul>
                    <!-- <select class="form-control" id="bank_name" style="width: 100%; text-align: right;">
                        <option><?php echo $bankName;?></option>
                        <option></option>
                    </select> -->
                </div><!-- /btn-group -->
            </div>

            <label for="branch" class="label_margin">Branch:</label>
            <input type="text" class="form-control" id="branch" value="<?php echo $branch;?>">

            <label for="acc_number" class="label_margin">Account Number:</label>
            <input type="text" class="form-control" id="acc_number" value="<?php echo $accountNum;?>">

            <label for="iban" class="label_margin">IBAN:</label>
            <input type="text" class="form-control" id="iban" value="<?php echo $IBAN;?>">

            <label for="swift_code" class="label_margin">Swift Code:</label>
            <input type="text" class="form-control" id="swift_code" value="<?php echo $swiftCode;?>">
        </div>
        <div class="form-group col-md-5  sub-form">
            <div class="form-group label_margin">
                <label >Debt Card Charges:</label><br/>
                <div class="form-group form-inline sub-form-group">
                    <label for="debt_per_fix" class="control-label font_gray">Percentage or Fixed:</label>
                    <div class="input-group pull-right right_align">               
                        <input type="text" class="form-control pull-right" id="debt_per_fix">
                        <div class="input-group-btn" style="width: 34px !important;">
                            <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                             V
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li><a class="debt_per">Percentage</a></li>
                                <li><a class="debt_fix">Fixed</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                    </div>
                </div>
                <div class="form-group form-inline sub-form-group">
                <label for="debt_charge" class="control-label font_gray">Charge:</label>
                <div class="input-group pull-right right_align">               
                    <input type="text" class="form-control pull-right" id="debt_charge" value="<?php echo $debt_charge;?>">
                </div>
                </div>
            </div>

            <div class="form-group label_margin" >
                <label >Credit Card Charges:</label><br/>
                <div class="form-group form-inline sub-form-group">
                    <label for="credit_per_fix" class="control-label font_gray">Percentage or Fixed:</label>
                    <div class="input-group pull-right right_align">               
                        <input type="text" class="form-control pull-right" id="credit_per_fix">
                        <div class="input-group-btn" style="width: 34px !important;">
                            <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                             V
                            </button>
                            <ul class="dropdown-menu pull-right">
                             <li><a class="credit_per">Percentage</a></li>
                             <li><a class="credit_fix">Fixed</a></li>
                            </ul>
                        </div><!-- /btn-group -->
                    </div>
                </div>
                <div class="form-group form-inline sub-form-group">
                    <label for="credit_charge" class="control-label font_gray">Charge:</label>
                    <div class="input-group pull-right right_align">               
                        <input type="text" class="form-control pull-right" id="credit_charge" value="<?php echo $credit_charge;?>">
                    </div>
                </div>
            </div>


            <div class="form-group label_margin">
                <label for="charge_alloc">Charge Allocation:</label>
                <div class="input-group">               
                    <input type="text" class="form-control" id="charge_alloc">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="false">
                         V
                        </button>
                        <ul class="dropdown-menu pull-right">
                         <li><a href="#">Bank</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                </div>

                <div class="row label_percent">
                    <div class="col-md-6 form-inline">
                    <label for="company_charge" class='font_gray'>Company: </label>
                    <input type="text" name="company_charge" class="form-control input-small" value="<?php echo $company;?>"><label for="company_charge"> %</label>
                    </div>
                    <div class="col-md-6 form-inline">
                    <label for="client_charge"  class='font_gray'>Client: </label>
                    <input type="text" name="client_charge" class="form-control input-small" value="<?php echo $client;?>"><label for="client_charge"> %</label>
                    </div>
                </div>
            </div>
        </div>
        </div>
        

        <div class="row">
        <span class="col-md-3"></span>
        <button class="col-md-3 btn btn-default input-cancel">
            <span>Cancel</span>
        </button>
        <span class="col-md-2"></span>
        <button class="col-md-3 btn btn-default input-submit bank_update">
            <span>Update</span>
        </button>
        </div>

    </form>

        <script type="text/javascript">
            $(document).ready(function(){
                $.ajax({
                    type : 'POST',
                    url : "<?php echo site_url('superuser/index/getBankList')?>",
                    dataType : 'json',
                    success : function(res){
                        
                        for(var i = 0; i < res.length; i++)
                        {
                            console.log(res[i][1]);
                            document.getElementById("bankList").innerHTML += '<li><a href="javascript:void(0);" id="bankRecord'+i+'" class="bankRecord" data-val="'+res[i][1]+'">'+res[i][1]+'</a></li>';
                        }
                    }
                })

                $(document).on('click', 'a.bankRecord', function(){
                    //alert($(this).data('val'));
                    $('#bank_name').val($(this).data('val'));
                });

                $('#debt_per_fix').val("<?php echo $debt_PF;?>");
                $('#credit_per_fix').val("<?php echo $credit_PF;?>");
                $('#bank_name').val("<?php echo $bankName;?>");

                $('.debt_per').click(function(){
                    $('#debt_per_fix').val('Percentage');                    
                })

                $('.debt_fix').click(function(){
                    $('#debt_per_fix').val('Fixed');                    
                })

                $('.credit_per').click(function(){
                    $('#credit_per_fix').val('Percentage');                    
                })

                $('.credit_fix').click(function(){
                    $('#credit_per_fix').val('fixed');                    
                })

                $('.bank_update').click(function(event){
                    event.preventDefault();
    
                    var accHolderName = $('#acc_holder_name').val();
                    var bankName = $('#bank_name').val();
                    var branch = $('#branch').val();
                    var accountNum = $('#acc_number').val();
                    var IBAN = $('#iban').val();
                    var swiftCode = $('#swift_code').val();
                    var debt_PF = $('#debt_per_fix').val() == 'Percentage' ? 0 : 1;
                    var debt_charge = $('#debt_charge').val();
                    var credit_PF = $('#credit_per_fix').val() == 'Percentage' ? 0 : 1;
                    var credit_charge = $('#credit_charge').val();
                    var chargeAllocation = $('#charge_alloc').val();
                    var company = $('#company').val();
                    var client = $('client').val();

                    var data = {
                        accHolderName : accHolderName, bankName : bankName, branch : branch, accountNum : accountNum, IBAN : IBAN, swiftCode : swiftCode, debt_PF : debt_PF, debt_charge : debt_charge, credit_PF : credit_PF, credit_charge : credit_charge, chargeAllocation : chargeAllocation, company : company, client : client
                    };

                    $.ajax({
                        type : 'POST',
                        url : "<?php echo site_url('superuser/index/bank_update')?>",
                        dataType : 'json',
                        data :  data,
                        success : function(res){
                            if(res)
                                alert('success');
                        }
                    });
                })
            })
        </script>

    </div>

    <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
