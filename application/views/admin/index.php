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
        <a href="<?php echo site_url('admin/index')?>"><button class="col-sm-2 btn btn_send active"><span>About Us</span></button></a>
        <a href="<?php echo site_url('admin/index/z7_2_privacy_pol')?>"><button class="col-sm-2 btn btn_mid"><span>Privacy Policy</span></button></a>
        <a href="<?php echo site_url('admin/index/z7_3_terms_condition')?>"><button class="col-sm-3 btn btn_mid"><span>Terms & Coditions</span></button></a>
        <a href="<?php echo site_url('admin/index/z7_4_contactus')?>"><button class="col-sm-2 btn btn_mid"><span>Cotact Us</span></button></a>
        <a href="<?php echo site_url('admin/index/z7_5_career')?>"><button class="col-sm-2 btn btn_request"><span>Career</span></button></a>
    </div>

    <form>
        <div class="row">
            <span class="col-md-1"></span>
            <div class="form-group col-md-10 sub-form left_align">
                <label for="about_us_list">About Us: </label>
                <textarea class="form-control footer_text" type="text" name="about_us_list" id="about_us_list"></textarea>
            </div>
        </div>
        <div class="row">
            <span class="col-md-5"></span>
            <button class="col-md-2 btn btn-default input-submit aboutus_update">
                <span>Update</span>
            </button>
        </div>
    </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            var aboutus = "<?php echo $aboutus;?>";
            $('#about_us_list').val(aboutus);

            $('.aboutus_update').click(function(){
                $.ajax({
                    url: "<?php echo site_url('admin/index/aboutus_update');?>",
                    data: 'aboutus='+ $('#about_us_list').val(),
                    dataType: 'JSON',
                    type: 'POST',
                    success: function(res){
                        alert('success');
                    }
                })
            })
        });
    </script>
    
    <?php include './asset/template/footer/common_footer.php' ?>

</body>
</html>
