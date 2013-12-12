<!--<script type='text/javascript'>
  window.fbAsyncInit = function() {
    FB.init({
      appId : '1382564888634899',
      status : true,
      cookie : true,
      xfbml : true,
      logging : true
    });
    /* キャンバスのサイズ(px) */
   FB.Canvas.setAutoGrow();
  }
</script>-->
<div class="fb-container">
<div class="jumbotron">
	<h1>イケメンとの相性を診断しよう！！</h1>
	<p>いいねをすると"イケメン診断"できるよ！！</p>
	<p><a class="btn btn-primary btn-lg" role="button">今すぐ診断開始</a></p>
</div>
	<?php echo Asset::img('background.png'); ?>
</div>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
	FB.init({ appId : <?php echo $appId; ?> });
	FB.Canvas.setAutoResize();
	FB.Canvas.setSize({ width: Fluid, height: Fluid });
</script>
