<body class="fb-container">
<div class="container">
<!--<div class="fb-container">-->
	<!--<?php //echo Asset::img('background.png',array("width" => "810")); ?>-->
	<div class="jumbotron fb-jumbotron">
		<h2>イケメン相性診断開始！！</h2>
		<p>心の準備はいいですか？！</p>
		<p><a class="btn btn-primary btn-hg" role="button" href="/diag/quiz1">今すぐ診断開始</a></p>
	</div>
<!--</div>-->
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
	FB.init({ appId : <?php echo $appId; ?> });
	FB.Canvas.setAutoResize();
	FB.Canvas.setSize({ width: Fluid, height: Fluid });
</script>
