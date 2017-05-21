<div class="panel panel-default">
	<div class="panel-heading">
		<?= $options['caption'] ?>
	</div>
	<div class="panel-body" id="picture_id">
		<div class="pictureselect">
			<?php foreach ($options['imagelist'] as $picture): ?>
				<?php
					$tagid = 'picture_id_' . $picture->id;
					$checked = '';
					$altval = h($picture->description) . ' (' . h($picture->filename) . ')';
					if ($options['selectedobject']->picture_id == $picture->id) {
						$checked = ' checked';
					}
					$url = $this->Url->image([
						'controller'=>'img',
						'action'=>'upload',
						$picture->filename
					]);
				?>
				<input type="radio" name="picture_id" id="<?= $tagid ?>" value="<?= $picture->id ?>"<?= $checked ?>/>
				<label for="<?= $tagid ?>">
					<img class="img-responsive img-rounded pictureselector<?= $checked ?>" src="<?= $url ?>" alt="<?= $altval ?>"/>
				</label>
			<?php endforeach; ?>
		</div>
	</div>
</div>
