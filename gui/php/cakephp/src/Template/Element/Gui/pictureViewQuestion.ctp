<div class="questionimage">
	<?php echo $this->Html->image(
		[
			'controller'=>'img',
			'action'=>'upload',
			$picture->filename
		],
		[
			'class'=>'img-rounded img-responsive picture',
			'alt'=>$picture->description
		]
	);?>
</div>
