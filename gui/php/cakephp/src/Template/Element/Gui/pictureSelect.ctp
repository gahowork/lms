<div class="panel panel-default">
	<div class="panel-heading">
		<?= $options['caption'] ?>
	</div>
	<div class="panel-body pictureselect" id="picture_id">
			<?php foreach ($options['imagelist'] as $picture): ?>
				<?php
					$tagid = 'picture_id_' . $picture->id;
					$checked='';
					if($options['selectedobject']->picture_id == $picture->id){
						$checked='checked';
					}
					$url = $this->Url->image([
						'controller'=>'img',
						'action'=>'upload',
						$picture->filename
					]);
				?>
				<input type="radio" name="picture_id" id="<?= $tagid ?>" value="<?= $picture->id ?>" <?= $checked ?>/>
				<label for="<?= $tagid ?>">
					<img class="img-responsive img-rounded pictureselector <?= $checked ?>" src="<?= $url ?>" alt="<?= $picture->filename ?>"/>
				</label>
			<?php endforeach; ?>
	</div>
</div>
