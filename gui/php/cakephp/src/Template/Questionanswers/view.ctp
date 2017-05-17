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
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionanswer->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($questionanswer, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="questionanswerid">ID</label>
				<div class="form-control" id="questionanswerid"><?= $this->Number->format($questionanswer->id) ?></div>
			</div>
			<div class="form-group">
				<label for="questionanswerid">Created</label>
				<div class="form-control" id="questionanswerid"><?= h($questionanswer->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="questionanswerquestion_id"><?= __('Question') ?></label>
				<?= $questionanswer->has('question') ? $this->Html->link($questionanswer->question->header . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questions', 'action' => 'view', $questionanswer->question->id], ['class'=>'btn btn-info', 'id'=>'questionanswerquestion_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="questionansweranswer_id"><?= __('Answer') ?></label>
				<?= $questionanswer->has('answer') ? $this->Html->link($questionanswer->answer->description . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Answers', 'action' => 'view', $questionanswer->answer->id], ['class'=>'btn btn-info', 'id'=>'questionansweranswer_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="questionanswerresult"><?= __('Result') ?></label>
				<div class="form-control" id="questionanswerresult"><?= $this->Text->autoParagraph(h($questionanswer->result)); ?></div>
			</div>

	</fieldset>
	</div>
</div>
