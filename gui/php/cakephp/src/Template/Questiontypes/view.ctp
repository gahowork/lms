<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questiontypes panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Questiontype') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $questiontype->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($questiontype, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="questiontypeid">ID</label>
				<div class="form-control" id="questiontypeid"><?= $this->Number->format($questiontype->id) ?></div>
			</div>
			<div class="form-group">
				<label for="questiontypeid">Created</label>
				<div class="form-control" id="questiontypeid"><?= h($questiontype->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="questiontypedescription"><?= __('Description') ?></label>
				<div class="form-control" id="questiontypedescription"><?= h($questiontype->description) ?></div>
			</div>

	</fieldset>
	</div>
</div>
