<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="adventures panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Adventure') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $adventure->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($adventure, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="adventureid">ID</label>
				<div class="form-control" id="adventureid"><?= $this->Number->format($adventure->id) ?></div>
			</div>
			<div class="form-group">
				<label for="adventureid">Created</label>
				<div class="form-control" id="adventureid"><?= h($adventure->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="adventuredescription"><?= __('Description') ?></label>
				<div class="form-control" id="adventuredescription"><?= h($adventure->description) ?></div>
			</div>

	</fieldset>
	</div>
</div>
