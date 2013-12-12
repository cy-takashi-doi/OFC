<div class="fb-container">
	<?php echo Asset::img('background.png',array("width" => "810")); ?>
	<div class="jumbotron">
		<h2>イケメン相性診断！！</h2>
		<p>いいねをすると"イケメン診断"できるよ！！</p>
		<div class="fb-like" data-href="https://www.facebook.com/pages/%E3%82%A4%E3%82%B1%E3%83%A1%E3%83%B3%E8%A8%BA%E6%96%AD%E3%83%86%E3%82%B9%E3%83%88-Community/224073727774189" data-width="450" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
		<!--<p><a class="btn btn-primary btn-lg" role="button">今すぐ診断開始</a></p>-->
	</div>
</div>
<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
<script type="text/javascript">
	FB.init({ appId : <?php echo $appId; ?> });
	FB.Canvas.setAutoResize();
	FB.Canvas.setSize({ width: Fluid, height: Fluid });
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=1382564888634899";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
