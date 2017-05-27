<?php
	$imagewidth = 'col-xs-12 col-sm-12 col-md-12 col-lg-12';
	if(isset($imageMatrix) && $imageMatrix == true){
		$imagewidth = 'col-xs-6 col-sm-6 col-md-6 col-lg-6';
	}
?>

<div class="questionimage col-xs-6 col-sm-6 col-md-6 col-lg-6">
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
