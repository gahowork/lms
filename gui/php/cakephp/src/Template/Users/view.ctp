<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="users panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View User') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($user, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="userid">ID</label>
				<div class="form-control" id="userid"><?= $this->Number->format($user->id) ?></div>
			</div>
			<div class="form-group">
				<label for="userid">Created</label>
				<div class="form-control" id="userid"><?= h($user->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="useremail"><?= __('Email') ?></label>
				<div class="form-control" id="useremail"><?= h($user->email) ?></div>
			</div>
			<div class="form-group">
				<label for="userpassword"><?= __('Password') ?></label>
				<div class="form-control" id="userpassword"><?= h($user->password) ?></div>
			</div>
			<div class="form-group">
				<label for="userusergroup_id"><?= __('Usergroup') ?></label>
				<?= $user->has('usergroup') ? $this->Html->link($user->usergroup->description . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Usergroups', 'action' => 'view', $user->usergroup->id], ['class'=>'btn btn-info', 'id'=>'userusergroup_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
