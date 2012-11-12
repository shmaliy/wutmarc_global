<div class="indexLeftColumn">
	<?php echo $this->action('jobs', 'index', 'default', array('alias' => 'jobs')); ?>
</div>
<div class="indexRightColumn">
	<h1><?php echo $this->category['title']; ?></h1>
	<div id="accordion"  class="accordion">
	    <?php foreach ($this->items as $item) : ?>
	    <h3 style="background: url('<?php echo $item['image']; ?>') no-repeat 5px center;">
	    	<span style="display:block; margin:0 0 0 15px;"><?php echo $item['title']; ?></span>
	    </h3>
	    <div style="margin:0 0 10px 0;">
	        <p style="margin:0 0 0 15px;">
	        	<?php echo $item['introtext']; ?>
	        </p>
	    </div>
	    <?php endforeach;?>
	</div>
</div>
<div class="clear"></div>