<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questionanswers panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Questionanswer') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-backward"></span>', ['controller'=>'questions', 'action' => 'view', $questionanswer->question_id], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'editbyquestion', $questionanswer->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($questionanswer, ['type'=>'post', 'url'=>['action'=>'deletebyquestion']]) ?>
					<?= $this->Form->hidden('id') ?>
					<button class="btn btn-danger navbar-btn" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
					<?= $this->Form->end() ?>
				</li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">
		<fieldset>
			<div class="form-group">
				<label for="questionansweranswer_id"><?= __('Answer') ?></label>
				<div class="form-control" id="questionanswerresult"><?= $questionanswer->answer->description ?></div>
			</div>
			<div class="form-group">
				<label for="questionanswerresult"><?= __('Result') ?></label>
				<div class="form-control" id="questionanswerresult"><?= $this->Text->autoParagraph(h($questionanswer->result)); ?></div>
			</div>

	</fieldset>
	</div>
</div>
