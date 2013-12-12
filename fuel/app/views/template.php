<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Loading Bootstrap -->
	<?php echo Asset::css('bootstrap.css'); ?>

	<!-- Loading Flat UI -->
	<?php echo Asset::css('flat-ui.css'); ?>

	<?php echo Asset::css('ikemen.css'); ?>
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
<body class="fb-container">
	<div class="container">
	<?php if (Session::get_flash('success')): ?>
		<div class="alert alert-success">
			<strong>Success</strong>
			<p><?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?></p>
		</div>
	<?php endif; ?>
	<?php if (Session::get_flash('error')): ?>
		<div class="alert alert-error">
			<strong>Error</strong>
			<p><?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?></p>
		</div>
	<?php endif; ?>
	<?php echo $content; ?>
	</div>
	<!-- /.container -->

	<!--
	<footer>
		<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
		<p>
			<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
			<small>Version: <?php //echo e(Fuel::VERSION); ?></small>
		</p>
	</footer>
	-->
	<!-- /.footer -->
	
	<!-- Load JS here for greater good =============================-->
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.js"></script>
	<script src="js/bootstrap-switch.js"></script>
	<script src="js/flatui-checkbox.js"></script>
	<script src="js/flatui-radio.js"></script>
	<script src="js/jquery.tagsinput.js"></script>
	<script src="js/jquery.placeholder.js"></script>
</body>
</html>
