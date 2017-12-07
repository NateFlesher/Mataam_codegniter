$(document).ready(function(){
	// $(".menu-ul li").click(function(){
	// 	// if($(this).hasClass('active')) return;

	// 	// $(".menu-ul li").removeClass('active');

	// 	// $(".menu-ul li").children().css({'background-color': '#efefef', 'font-size': '25px','color': '#2693ff'});

	// 	// $(this).addClass('active');
	// 	// $(this).children().css({'background-color': '#2693ff', 
	// 	// 			'border-radius': '10px', 
	// 	// 			'border-bottom-left-radius': '0',
	// 	// 			'border-bottom-right-radius': '0',
	// 	// 			'border-bottom': '0',
	// 	// 			'color': '#fff'});
	// });

	
	// $('.login_company').click(function(){
	// 	document.location.href= "../../superuser/index.php";
	// });

	var menu_width = $(".menu-ul").width();
	// if(menu_width > $(window).width() - 300)
	// {
	// 	alert('');
	// 	$('.menu-ul li a').css('padding', '15px 1vw !important');
	// 	menu_width = $(".menu-ul").width();
	// }
	var margin_left = ($(window).width() - menu_width - 180) / 2;
	if(margin_left < 0) margin_left = 0;

	//alert("screen = " + $(window).width() + "   menu_width = " + menu_width + "  margin_left =" + margin_left);

	$('.menu-ul').css('margin-left', margin_left);
	//$('.menu-ul li a').css('padding', '15px 30px !important');

	$('.request').click(function(){
		//alert('');
		//$('#RUSure').modal('show');
	});

	$('.invoicelist').click(function(){
		$('#invoicelist').modal('show');
	});

	$('.delete').click(function(){
		$('#yes_no').modal('show');
	});
	
	$('.edit').click(function(){
		$('#editClients').modal('show');
	});
	
	$('.addClients').click(function(){
		$('#addClients').modal('show');
	});

	$('.upload_invoice').click(function(){
		$('#upload_invoice').modal('show');
	});

	$('.editEmp').click(function(){
		$('#editEmp').modal('show');
	});

	$('.reset_psw').click(function(){
		$('#reset_psw').modal('show');
	});

	$('.addEmployment').click(function(){
		$('#addEmployment').modal('show');
	});


	// // customer- wallet page
	// var  newcard= $("<div class='col-sm-4 dis_table'><div class='visa'><img src='../../asset/images/customer/visa_text.png' alt='visa'><div class='visa-close_btn' data-dismiss='modal'><img src='../../asset/images/customer/close.png' alt='close'></div></div></div>");

	//  $(".Add_card").click(function(){
	//  	var newentry = newcard.clone();
	//  	newentry.find(".visa-close_btn").click(function(){
	//  		newentry.remove();
	//  	})
	//  	newentry.insertBefore($(this).parent());
	//  });

	//  var  newcount= $("<div class='col-sm-4 dis_table'><div class='bank'><div class='bank-close_btn' data-dismiss='modal'><img src='../../asset/images/customer/close.png' alt='close'></div></div></div>");

	//  $("#bank_account").click(function(){
	//  	var newbank = newcount.clone();
	//  	newbank.find(".bank-close_btn").click(function(){
	//  		newbank.remove();
	//  	})
	//  	newbank.insertBefore($(this).parent());
	//  });


	// footer position set
	var footer_height = $('#fixedfooter').height() + 130;
	//footer_height = screen.height > 950 ? footer_height + 150 : footer_height + 80;
	var header_height = $('.header-container').height() + footer_height + $('#fixedfooter').height();
	//alert(header_height + " : " + screen.height);
	if(header_height < screen.height)
	//if($('#fixedfooter').position().top + footer_height < screen.height - 50)
	{
		$('#fixedfooter').css({
				'position': 'fixed',
				'bottom': '0px',
				'left': '0px',
				'width': '100%'
		});

		$('.header-container').css('margin-bottom', $('#fixedfooter').height());
	}
	else
		$('.header-container').css('margin-bottom', 60);
	//////////////////////////////////////

	// Sign Up
	$('.Register_Btn').click(function(event){
		//alert('');
		// $('#signup_form').attr('action', <?php echo site_url('signup_user');?>);
		// $('#signup_form').submit();
		event.preventDefault();

		var username = $('#username').val();
        var email = $('#email').val();
        var contactNum = $('#contactNum').val();
        var psw  = $('#pwd').val();
        var confirm  = $('#confirm').val();
        if(psw != confirm)
        {
        	alert('password is not correct!');
        	return;
        }
        var photo1  = $('#photo_input').val();
        var sex  = $('input[name=gender]:checked').val() == 'male' ? 0 : 1;
        var birth_day = $('#birth_day').val();
        var birth_month = $('#birth_month').val();
        var birth_year = $('#birth_year').val();
        if((birth_year != 'Year') && (birth_month != 'Month') && (birth_day != 'Day'))
            birthday = birth_year+'-'+birth_month+'-'+birth_day;
        else
        {
            birthday = '0000-00-00';
            //redirect('login/new_user');
        }
        var address  = $('#address').val();
        var language  = $('#lang').val();
        var nationality  = $('#national').val();
        var user_id  = $('#userid').val();
        var photo2  = $('#photo_input2').val();
        var pp_term  = $('#pp_term').val();
        var robot_check  = $('#robot_check').val();

        var data = {
        	username : username, email : email, contactNum : contactNum, psw : psw, photo1 : photo1, sex :  sex, birthday : birthday,
        	address : address, language : language, nationality : nationality, user_id : user_id, photo2 : photo2, pp_term : pp_term, robot_check: robot_check
        };

        //alert(data.username);

        $.ajax({
        	type : 'POST',
        	url : "signup_user",
        	dataType : 'json',
        	data :  data,
        	success : function(res){
        		if(res)
        			alert('success');
        	}
        });
	});

	
	// company profile update
	$('.com_update').click(function(event){
		event.preventDefault();
	
		var com_Name = $('#com_Name').val();
		var com_Address = $('#com_Address').val();
		var contactNum = $('#contactNum').val();
		var email = $('#email').val();
		var changeLogo = $('#changeLogo').val();
		var category = $('#category').val();
		var service = $('input[name=service]:checked').val() == 'invoice' ? 0 : 1;
		var facebook = $('#facebook').val();
		var twitter = $('#twitter').val();
		var linkedin = $('#linkedin').val();
		var instagram = $('#instagram').val();
		var youtube = $('#youtube').val();
		var googleplus = $('#googleplus').val();
		var country_no = $('#country_no').val();
		var arr = country_no.split(' ');
		if(arr.length == 2)
			country_no = arr[1];
		//alert(country_no + '   ' + arr.length);
		if($('input[name=stat_sel]').val()) 
		{
			var status = $('input[name=stat_sel]:checked').val() == 'stat_E' ? 0 : 1;
			//alert($('input[name=stat_sel]:checked').val() + status);
			var user_id = $('#user_id').val();
			var data = {
				com_Name : com_Name, com_Address : com_Address, contactNum : contactNum, 
				email : email, changeLogo : changeLogo, category : category, service : service,
				facebook : facebook, twitter : twitter, linkedin : linkedin, instagram : instagram,
				youtube : youtube, googleplus : googleplus, status : status, countryNum : country_no, user_id : user_id
			};
		}
		else
		{
			var data = {
				com_Name : com_Name, com_Address : com_Address, contactNum : contactNum, 
				email : email, changeLogo : changeLogo, category : category, service : service,
				facebook : facebook, twitter : twitter, linkedin : linkedin, instagram : instagram,
				youtube : youtube, googleplus : googleplus, countryNum : country_no
			};
		}

		$.ajax({
        	type : 'POST',
        	url : "com_update",
        	dataType : 'json',
        	data :  data,
        	success : function(res){
        		if(res)
        			alert('success');
        	}
        });
	});

	// $('#table_length').parent().css('float', 'right');
	//$('#table_length').css('text-align', 'right');
});

