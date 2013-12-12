<div class="fb-container">
	<?php echo Asset::img('background.png',array("width" => "810")); ?>
	<div class="jumbotron">
		<h3>食事は好きな方から食べる</h3>
		<p><a class="btn btn-primary btn-lg" role="button" href="/diag/quiz2">はい</a></p>
		<p><a class="btn btn-primary btn-lg" role="button" href="/diag/quiz3">いいえ</a></p>
	</div>
</div>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
	FB.init({ appId : <?php echo $appId; ?> });
	FB.Canvas.setAutoResize();
	FB.Canvas.setSize({ width: Fluid, height: Fluid });
</script>
