<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="usergroups panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Usergroup') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $usergroup->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($usergroup, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="usergroupid">ID</label>
				<div class="form-control" id="usergroupid"><?= $this->Number->format($usergroup->id) ?></div>
			</div>
			<div class="form-group">
				<label for="usergroupid">Created</label>
				<div class="form-control" id="usergroupid"><?= h($usergroup->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="usergroupdescription"><?= __('Description') ?></label>
				<div class="form-control" id="usergroupdescription"><?= h($usergroup->description) ?></div>
			</div>

	</fieldset>
	</div>
</div>
