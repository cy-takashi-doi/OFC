<div class="fb-container">
	<?php echo Asset::img('background.png',array("width" => "810")); ?>
	<div class="jumbotron">
		<h1>イケメン相性診断を開始します！！</h1>
		<p>心の準備はいいかな？！</p>
		<p><a class="btn btn-primary btn-lg" role="button" href="/diag/quiz1">今すぐ診断開始</a></p>
	</div>
</div>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
	FB.init({ appId : <?php echo $appId; ?> });
	FB.Canvas.setAutoResize();
	FB.Canvas.setSize({ width: Fluid, height: Fluid });
</script>
