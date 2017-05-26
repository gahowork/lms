<?php
	$elementId='formpicture_' . $picture->id;
?>
<div class="form-group">
	<div>
		<label for="<?= $elementId ?>"><?= __('Picture') ?></label>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
			<?php echo $this->Html->image(
				[
					'controller'=>'img',
					'action'=>'upload',
					$picture->filename
				],
				[
					'id'=>$elementId,
					'class'=>'img-rounded img-responsive picture',
					'alt'=>$picture->description
				]
			);?>
		</div>
	</div>
</div>
