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
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $questiontype->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($questiontype, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
