<div class="answerimage col-xs-3 col-sm-3 col-md-3 col-lg-3">
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
