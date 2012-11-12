<div class="index-jobs">
	<div class="title"><?php echo $this->category['title']; ?></div>
	<div class="employee"></div>
	<div class="container">
		<?php foreach ($this->items as $item) : ?>
		<div class="item">
			<div class="title"><?php echo $item['title']; ?></div>
			<div class="direction"><i><?php echo $item['title_alias']; ?></i></div>
			<div class="introtext"><?php echo $item['introtext']; ?></div>
		</div>
		<?php endforeach; ?>
		<div class="resume"><?php echo $this->category['description']; ?></div>
	</div>
</div>