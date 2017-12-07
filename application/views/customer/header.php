<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>asset/images/title.png">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/common/customer.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/common/admin.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/common/common.css">
  <script src="<?php echo base_url(); ?>asset/common/jquery-3.1.1.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/common/script.js"></script>

  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/dataTables.bootstrap.min.css">
<!-- DataTables -->
<script src="<?PHP Echo base_url(); ?>asset/js_download/jquery.dataTables.min.js.download"></script>
<script src="<?PHP Echo base_url(); ?>asset/js_download/dataTables.bootstrap.min.js.download"></script>
<!-- DataTables buttons scripts -->
<script src="<?PHP Echo base_url(); ?>asset/js_download/pdfmake.min.js.download"></script>
<script src="<?PHP Echo base_url(); ?>asset/js_download/vfs_fonts.js.download"></script>
<script src="<?PHP Echo base_url(); ?>asset/js_download/buttons.html5.min.js.download"></script>
<script src="<?PHP Echo base_url(); ?>asset/js_download/buttons.print.min.js.download"></script>
<script src="<?PHP Echo base_url(); ?>asset/js_download/dataTables.buttons.min.js.download"></script>
<script src="<?PHP Echo base_url(); ?>asset/js_download/buttons.bootstrap.min.js.download"></script>

</head>
<body>
<div class="header-title">
	<img class="header-mark" src="<?php echo base_url(); ?>asset/images/mark.png" />
	
	<div class="logout_mark">
		<div class="input-group-btn logout_mark1">
			<button type="button" class="btn dropdown-toggle vertical-text" data-toggle="dropdown" aria-expanded="true">
			 &#8711
			</button>
			<ul class="dropdown-menu pull-right">
			 <li><a href="<?php echo site_url('login/logout_user');?>">Log out</a></li>
			</ul>
		</div>
		<img src="<?php echo base_url(); ?>asset/images/avatar_ex.png"  class="logout_mark">
	</div>
</div>