<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="pictures panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Picture') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $picture->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($picture, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="pictureid">ID</label>
				<div class="form-control" id="pictureid"><?= $this->Number->format($picture->id) ?></div>
			</div>
			<div class="form-group">
				<label for="pictureid">Created</label>
				<div class="form-control" id="pictureid"><?= h($picture->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="picturedescription"><?= __('Description') ?></label>
				<div class="form-control" id="picturedescription"><?= h($picture->description) ?></div>
			</div>

	</fieldset>
	</div>
</div>
