<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "index" ); ?>'><?php echo Html::anchor('diag/index','Index');?></li>
	<li class='<?php echo Arr::get($subnav, "start" ); ?>'><?php echo Html::anchor('diag/start','Start');?></li>
	<li class='<?php echo Arr::get($subnav, "result" ); ?>'><?php echo Html::anchor('diag/result','Result');?></li>

</ul>
<p>Result</p>