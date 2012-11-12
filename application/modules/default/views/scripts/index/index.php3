<?php echo $this->action('directivesslider', 'index', 'default', array('lang'=> Zend_Registry::get('lang'))); ?>
<div class="clear"></div>
<div class="indexLeftColumn">
	<?php echo $this->action('indexnews', 'index', 'default', array('lang'=> Zend_Registry::get('lang'))); ?>
</div>

<div class="indexCenterColumn">
	<div class="quotes">
		<div class="mportal-ru">
			<!--START theFinancials.com Content-->
			<!--copyright theFinancials.com - All Rights Reserved-->
			<!--Get Help by Calling 1.843.886.3635-->
			<iframe src='http://www.thefinancials.com/Widgets/ShowWidget.aspx?id=0275205779&width=0&height=0' width='315' height='665' scrolling='no' marginheight='0' marginwidth='0' hspace='0' vspace='0' frameborder='no' allowtransparency='true'></iframe>
			<!--END theFinancials.com Content-->
		</div>
	</div>
</div>

<div class="indexRightColumnNew">
	<?php echo $this->action('jobs', 'index', 'default', array('alias' => 'jobs')); ?>
</div>

<div class="clear"></div>