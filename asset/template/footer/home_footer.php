
<div class="container footer-container">
	<nav class="navbar navbar-default footer">
      	<div class="footer-bar">
		</div>
        <div class="row-fluid footer-area">
          <div id="navbar" class="navbar-collapse collapse in" aria-expanded="false">
            <ul class="nav footer-ul">
                <li class="col-sm-2">
                	<a href="<?php echo site_url('footer/index')?>" class='aboutus_item'>
					<div>
						<div class="back_img"><!-- <img src="<?php echo base_url(); ?>asset/images/aboutus.png" /> --></div>
						<span>About Us</span>
					</div>
					</a>
				</li>
				<li class="col-sm-2">
					<a href="<?php echo site_url('footer/index/privacy_pol')?>" class='privacy_item'>
					<div>
						<div class="back_img"><!-- <img src="<?php echo base_url(); ?>asset/images/privatepolicy.png" /> --></div>
						<div>Privacy policy</div>
					</div>
					</a>
				</li>
				<li class="col-sm-2">
					<a href="<?php echo site_url('footer/index/terms_condition')?>" class='terms_item'>
					<div>
						<div class="back_img"><!-- <img src="<?php echo base_url(); ?>asset/images/terms.png" /> --></div>
						<div>Terms & Conditions</div>
					</div>
					</a>
				</li>
				<li class="col-sm-2">
					<a href="<?php echo site_url('footer/index/contactus')?>" class='contactus_item'>
					<div>
						<div class="back_img"><!-- <img src="<?php echo base_url(); ?>asset/images/contactus.png" /> --></div>
						<div>Contact Us</div>
					</div>
					</a>
				</li>
				<li class="col-sm-2">
					<a href="<?php echo site_url('footer/index/career')?>" class='career_item'>
					<div>
						<div class="back_img"><!-- <img src="<?php echo base_url(); ?>asset/images/career.png" /> --></div>
						<div>Career</div>
					</div>
					</a>
				</li>
				<li class="col-sm-2">
					<a href="#" class='merchant_item'>
					<div>
						<div class="back_img"><!-- <img src="<?php echo base_url(); ?>asset/images/merchant.png" /> --></div>
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
	<a href="https://www.facebook.com"><img class="footer-mark1" src="<?php echo base_url(); ?>asset/images/facebook.png" /></a>
	<span class="footer-text">Follow us on :</span>
</div>

<script type="text/javascript">
	$(document).ready(function(){

		$(".footer-ul li").click(function(){
			if($(this).hasClass('active')) return;

			$(".footer-ul li").removeClass('active');
			$(this).addClass('active');
		});

		$('.aboutus_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/aboutus.png) no-repeat', 'height' : '38px', 'margin' : '0 auto', 'width' : '46px'});
		$('.privacy_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/privatepolicy.png) no-repeat', 'height' : '38px', 'margin' : '0 auto', 'width' : '26px'});
		$('.terms_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/terms.png) no-repeat', 'height' : '38px', 'margin' : '0 auto', 'width' : '27px'});
		$('.contactus_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/contactus.png) no-repeat', 'height' : '38px', 'margin' : '0 auto', 'width' : '26px'});
		$('.career_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/career.png) no-repeat', 'height' : '38px', 'margin' : '0 auto', 'width' : '26px'});
		$('.merchant_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/merchant.png) no-repeat', 'height' : '38px', 'margin' : '0 auto', 'width' : '41px'});

		$('.aboutus_item').mouseover(function(){
			//$(this).find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/aboutus_active.png) no-repeat'});
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(1000%)',
										'filter': 'brightness(1000%)'});
			$(this).css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0',
					    'border-bottom-left-radius': '0'});
		})
		.mouseout(function(){
			if($(this).parent().hasClass('active')) return;
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(100%)',
										'filter': 'brightness(100%)'});
			//$(this).find('.back_img').css({'background' : 'url(<?php echo base_url(); ?>asset/images/aboutus.png) no-repeat'});
			$(this).css({'background-color': '#efefef',
					    'color': '#2693ff',
					    'text-decoration': 'none'});
		});

		if($('.aboutus_item').parent().hasClass('active'))
		{
			$('.aboutus_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/aboutus_active.png) no-repeat'});
			$('.aboutus_item').css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0',
					    'border-bottom-left-radius': '0'});
		}

		$('.privacy_item').mouseover(function(){
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(1000%)',
										'filter': 'brightness(1000%)'});
			//$(this).find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/privatepolicy_active.png) no-repeat'});
			$(this).css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0px',
					    'border-bottom-left-radius': '0px'});
		})
		.mouseout(function(){
			if($(this).parent().hasClass('active')) return;
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(100%)',
										'filter': 'brightness(100%)'});
			// $(this).find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/privatepolicy.png) no-repeat'});
			$(this).css({'background-color': '#efefef',
					    'color': '#2693ff',
					    'text-decoration': 'none'});
		});

		if($('.privacy_item').parent().hasClass('active'))
		{
			$('.privacy_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/privatepolicy_active.png) no-repeat'});
			$('.privacy_item').css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0',
					    'border-bottom-left-radius': '0'});
		}

		$('.terms_item').mouseover(function(){
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(1000%)',
										'filter': 'brightness(1000%)'});
			//$(this).find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/terms_active.png) no-repeat'});
			$(this).css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0',
					    'border-bottom-left-radius': '0'});
		})
		.mouseout(function(){
			if($(this).parent().hasClass('active')) return;
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(100%)',
										'filter': 'brightness(100%)'});
			// $(this).find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/terms.png) no-repeat'});
			$(this).css({'background-color': '#efefef',
					    'color': '#2693ff',
					    'text-decoration': 'none'});
		});

		if($('.terms_item').parent().hasClass('active'))
		{
			$('.terms_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/terms_active.png) no-repeat'});
			$('.terms_item').css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0',
					    'border-bottom-left-radius': '0'});
		}

		$('.contactus_item').mouseover(function(){
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(1000%)',
										'filter': 'brightness(1000%)'});
			//$(this).find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/contactus_active.png) no-repeat'});
			$(this).css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0',
					    'border-bottom-left-radius': '0'});
		})
		.mouseout(function(){
			if($(this).parent().hasClass('active')) return;
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(100%)',
										'filter': 'brightness(100%)'});
			//$(this).find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/contactus.png) no-repeat'});
			$(this).css({'background-color': '#efefef',
					    'color': '#2693ff',
					    'text-decoration': 'none'});
		});

		if($('.contactus_item').parent().hasClass('active'))
		{
			$('.contactus_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/contactus_active.png) no-repeat'});
			$('.contactus_item').css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0',
					    'border-bottom-left-radius': '0'});
		}

		$('.career_item').mouseover(function(){
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(1000%)',
										'filter': 'brightness(1000%)'});
			//$(this).find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/career_active.png) no-repeat'});
			$(this).css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0',
					    'border-bottom-left-radius': '0'});
		})
		.mouseout(function(){
			if($(this).parent().hasClass('active')) return;
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(100%)',
										'filter': 'brightness(100%)'});
			//$(this).find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/career.png) no-repeat'});
			$(this).css({'background-color': '#efefef',
					    'color': '#2693ff',
					    'text-decoration': 'none'});
		});

		if($('.career_item').parent().hasClass('active'))
		{
			$('.career_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/career_active.png) no-repeat'});
			$('.career_item').css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0',
					    'border-bottom-left-radius': '0'});
		}

		$('.merchant_item').mouseover(function(){
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(1000%)',
										'filter': 'brightness(1000%)'});
			//$(this).find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/merchant_active.png) no-repeat'});
			$(this).css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0',
					    'border-bottom-left-radius': '0'});
		})
		.mouseout(function(){
			if($(this).parent().hasClass('active')) return;
			$(this).find('.back_img').css({'-webkit-filter': 'brightness(100%)',
										'filter': 'brightness(100%)'});
			//$(this).find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/merchant.png) no-repeat'});
			$(this).css({'background-color': '#efefef',
					    'color': '#2693ff',
					    'text-decoration': 'none'});
		});

		if($('.merchant_item').parent().hasClass('active'))
		{
			$('.merchant_item').find('.back_img').css({'background': 'url(<?php echo base_url(); ?>asset/images/merchant_active.png) no-repeat'});
			$('.merchant_item').css({'background-color': '#2693ff',
						'border-radius': '10px',
					    'color': '#fff',
					    'text-decoration': 'none',
					    'border-bottom-right-radius': '0',
					    'border-bottom-left-radius': '0'});
		}
	});
</script>