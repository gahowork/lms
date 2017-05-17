<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questions panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Question') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($question, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
					<?= $this->Form->hidden('id') ?>
					<?= $this->Form->button(__('Delete'),['class'=>'btn btn-warning']) ?>
					<?= $this->Form->end() ?>
				</li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">
		<fieldset>
			<div class="form-group">
				<label for="questionid">ID</label>
				<div class="form-control" id="questionid"><?= $this->Number->format($question->id) ?></div>
			</div>
			<div class="form-group">
				<label for="questionid">Created</label>
				<div class="form-control" id="questionid"><?= h($question->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="questionheader"><?= __('Header') ?></label>
				<div class="form-control" id="questionheader"><?= h($question->header) ?></div>
			</div>
			<div class="form-group">
				<label for="questiondescription"><?= __('Description') ?></label>
				<div class="form-control" id="questiondescription"><?= h($question->description) ?></div>
			</div>
			<div class="form-group">
				<label for="questionquestiontype_id"><?= __('Questiontype') ?></label>
				<?= $question->has('questiontype') ? $this->Html->link($question->questiontype->description . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questiontypes', 'action' => 'view', $question->questiontype->id], ['class'=>'btn btn-info', 'id'=>'questionquestiontype_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
