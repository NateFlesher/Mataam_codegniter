<?php include 'header.php';?>

<div class="container header-container">
<form action="<?php echo site_url('');?>" method="post">
	<div class="row content">
	 <!-- Sign Up line -->
		<div class="row footer_title"><label>Terms & Condition</label></div>
	 <!-- instert the information table -->
		<div><textarea id="terms_condition" style="width: 80%; border: 0px;"></textarea></div>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#terms_condition').val("<?php echo $terms_condition;?>");
			});
		</script> 
	</div>

	</form>
 </div>

 <?php include './asset/template/footer/common_footer.php'?>

</body>
</html>
