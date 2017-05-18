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
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $question->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($question, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<?= $question->has('questiontype') ? $this->Html->link('<span class="label">' . $question->questiontype->description . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questiontypes', 'action' => 'view', $question->questiontype->id], ['class'=>'btn btn-info', 'id'=>'questionquestiontype_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>

<?= $this->element('ModifyTable/questionanswer_table') ?>
