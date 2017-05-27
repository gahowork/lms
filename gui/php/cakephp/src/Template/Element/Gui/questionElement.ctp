<div class="questionelement panel panel-info">
	<div class="panel-body">
		<?php if($question->questiontype->id == 2 || $question->questiontype->id == 3) : ?>
			<div class="questionimageblock col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="row">
					<?php
						if(count($question->questionpictures) > 1) {
							foreach($question['questionpictures'] as $questionpicture) {
								echo $this->Element('Gui/pictureViewQuestion',['picture'=>$questionpicture->picture, 'imageMatrix'=>true]);
							}
						} else {
							echo $this->Element('Gui/pictureViewQuestion',['picture'=>$question->questionpictures[0]->picture]);
						}
					?>
				</div>
			</div>
		<?php endif; ?>
		<?php if($question->questiontype->id == 3) : ?>
			<div class="questiondatablock col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading"><?= h($question->header) ?></div>
					<div class="panel-body"><?= $question->description ?></div>
				</div>
			</div>
		<?php endif; ?>
		<?php if($question->questiontype->id == 1) : ?>
			<div class="questiondatablock col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><?= h($question->header) ?></div>
					<div class="panel-body"><?= $question->description ?></div>
				</div>
			</div>
		<?php endif; ?>
	</div>
	<div class="panel-footer">
		<?= $this->Element('Gui/questionAnswerSingleSelect', ['questionanswers'=>$question->questionanswers]) ?>
	</div>
</div>
