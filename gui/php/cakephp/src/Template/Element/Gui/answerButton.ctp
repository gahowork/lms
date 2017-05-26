<?php
	$postpath = [
		'url'=>[
			'controller'=>'quizzes',
			'action'=>'checkanswer'
		]
	];
	if (!isset($category_id)) {
		$category_id = 'NULL';
	}
	if (!isset($adventure_id)) {
		$adventure_id = 'NULL';
	}

	$buttonClass = ' col-xs-9 col-sm-9 col-md-9 col-lg-9';
	if (count($questionanswer->answer->answerpictures) == 0 ) {
		$buttonClass = ' form-control';
	}
?>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	<?= $this->Form->create('', $postpath) ?>
	<?php
		if (count($questionanswer->answer->answerpictures)> 0) {
			echo $this->Element('Gui/pictureViewAnswer',['picture'=>$questionanswer->answer->answerpictures[0]->picture]);
		}
	?>
	<?= $this->Form->hidden('questionanswer_id', ['value'=>$questionanswer->id]) ?>
	<?= $this->Form->hidden('quizztype', ['value'=>'1']) ?>
	<?= $this->Form->hidden('category_id', ['value'=>$category_id]) ?>
	<?= $this->Form->hidden('adventure_id', ['value'=>$adventure_id]) ?>
	<?= $this->Form->button(h($questionanswer->answer->description),['class'=>'btn btn-info' . $buttonClass]) ?>
	<?= $this->Form->end() ?>
</div>
