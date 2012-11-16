<div class="indexLeftColumn">
	<?php echo $this->action('jobs', 'index', 'default', array('alias' => 'jobs')); ?>
</div>
<div class="indexRightColumn">
	<h1><?php echo $this->category['title']; ?></h1>
	
	<div class="contacts-container" id="accordion-custom">
		<?php $i = 0;?>
		<?php 
			foreach ($this->items as $item) : 
			$i++;
		?>
		<div id="row-<?php echo $i; ?>" class="row">
			<div class="title-container">
				<div class="title-flag"><img src="<?php echo $item['image']; ?>"></div>
				<div id="row-<?php echo $i; ?>-title" class="row-title">
					<a href="#" id="row-<?php echo $i; ?>-title-hide" class="row-title-a-hide" onclick="hideItem('row-<?php echo $i; ?>');"><span><?php echo $item['title']; ?></span></a>
					<a href="#" id="row-<?php echo $i; ?>-title-show" class="row-title-a-show" onclick="showItem('row-<?php echo $i; ?>');"><span><?php echo $item['title']; ?></span></a>
				</div>
				<div class="clear"></div>
			</div>
			<div id="row-<?php echo $i; ?>-content" class="row-content" style="display:none;">
				<div>
					<?php echo $item['introtext']; ?>
				</div>
			</div>
		</div>
		<?php endforeach;?>
	</div>
</div>
<div class="clear"></div>

<script>

var contactsPrefix = 'row';
var rows = $$('.row');
var start = 1;

function rowsInit()
{
	new Effect.Parallel([
		new Effect.SlideDown($('row-' + start + '-content'), {sync:true}), 
	    new Effect.Fade($('row-' + start + '-title-show'), { sync: true}) 
	], { 
		duration: 0.6
	});
	return false;
}

function hideItem(id)
{
	new Effect.Parallel([
    	new Effect.SlideUp($(id + '-content'), {sync:true}), 
    	new Effect.Appear($(id + '-title-show'), { sync: true}) 
    ], { 
    	duration: 0.6
    });
    return false;
}

function showItem(id)
{
	//hideAll();

	new Effect.Parallel([
    	new Effect.SlideDown($(id + '-content'), {sync:true}), 
        new Effect.Fade($(id + '-title-show'), { sync: true}) 
    ], { 
    	duration: 0.6
    });
	return false;
}

Event.observe(window, 'load', rowsInit, false);

</script>