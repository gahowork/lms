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
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $usergroup->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($usergroup, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
