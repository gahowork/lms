<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questionpictures panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Questionpicture') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionpicture->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($questionpicture, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
					<?= $this->Form->hidden('id') ?>
					<?= $this->Form->button(__('Delete'),['class'=>'btn btn-warning navbar-btn']) ?>
					<?= $this->Form->end() ?>
				</li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">
		<fieldset>
			<div class="form-group">
				<label for="questionpictureid">ID</label>
				<div class="form-control" id="questionpictureid"><?= $this->Number->format($questionpicture->id) ?></div>
			</div>
			<div class="form-group">
				<label for="questionpictureid">Created</label>
				<div class="form-control" id="questionpictureid"><?= h($questionpicture->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="questionpicturequestion_id"><?= __('Question') ?></label>
				<?= $questionpicture->has('question') ? $this->Html->link($questionpicture->question->header . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questions', 'action' => 'view', $questionpicture->question->id], ['class'=>'btn btn-info', 'id'=>'questionpicturequestion_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="questionpicturepicture_id"><?= __('Picture') ?></label>
				<?= $questionpicture->has('picture') ? $this->Html->link($questionpicture->picture->description . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Pictures', 'action' => 'view', $questionpicture->picture->id], ['class'=>'btn btn-info', 'id'=>'questionpicturepicture_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
