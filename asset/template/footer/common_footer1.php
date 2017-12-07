<div id='fixedfooter'>
<div class="container footer-container">
	<nav class="navbar navbar-default footer">
      	<div class="footer-bar">
		</div>
        <div class="row-fluid footer-area">
          <div id="navbar" class="navbar-collapse collapse in" aria-expanded="false">
            <ul class="nav footer-ul">
                <li class="active col-sm-2">
                	<a href="<?php echo site_url('footer/index')?>" class='aboutus_item'>
					<div>
						<div><img src="<?php echo base_url(); ?>asset/images/aboutus.png" /></div>
						<div>About Us</div>
					</div>
					</a>
				</li>
				<li class="col-sm-2">
					<a href="<?php echo site_url('footer/index/privacy_pol')?>" class='privacy_item'>
					<div>
						<div><img src="<?php echo base_url(); ?>asset/images/privatepolicy.png" /></div>
						<div>Privacy policy</div>
					</div>
					</a>
				</li>
				<li class="col-sm-2">
					<a href="<?php echo site_url('footer/index/terms_condition')?>" class='terms_item'>
					<div>
						<div><img src="<?php echo base_url(); ?>asset/images/terms.png" /></div>
						<div>Terms & Conditions</div>
					</div>
					</a>
				</li>
				<li class="col-sm-2">
					<a href="<?php echo site_url('footer/index/contactus')?>" class='contactus_item'>
					<div>
						<div><img src="<?php echo base_url(); ?>asset/images/contactus.png" /></div>
						<div>Contact Us</div>
					</div>
					</a>
				</li>
				<li class="col-sm-2">
					<a href="<?php echo site_url('footer/index/career')?>" class='career_item'>
					<div>
						<div><img src="<?php echo base_url(); ?>asset/images/career.png" /></div>
						<div>Career</div>
					</div>
					</a>
				</li>
				<li class="col-sm-2">
					<a href="#" class='merchant_item'>
					<div>
						<div><img src="<?php echo base_url(); ?>asset/images/merchant.png" /></div>
						<div>Merchant</div>
					</div>
					</a>
				</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</div>

<div class="footer-title">
	<a href="https://www.instagram.com"><img class="footer-mark" src="<?php echo base_url(); ?>asset/images/isntagram.png" /></a>
	<a href="https://www.facebook.com"><img class="footer-mark" src="<?php echo base_url(); ?>asset/images/facebook.png" /></a>
	<span class="footer-text">Follow us on :</span>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.aboutus_item').mouseover(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/aboutus_active.png');
		})
		.mouseout(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/aboutus.png');
		});

		$('.privacy_item').mouseover(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/privatepolicy_active.png');
		})
		.mouseout(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/privatepolicy.png');
		});

		$('.terms_item').mouseover(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/terms_active.png');
		})
		.mouseout(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/terms.png');
		});

		$('.contactus_item').mouseover(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/contactus_active.png');
		})
		.mouseout(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/contactus.png');
		});

		$('.career_item').mouseover(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/career_active.png');
		})
		.mouseout(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/career.png');
		});
		
		$('.merchant_item').mouseover(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/merchant_active.png');
		})
		.mouseout(function(){
			$(this).find('img').attr('src','<?php echo base_url(); ?>asset/images/merchant.png');
		});
	});
</script>