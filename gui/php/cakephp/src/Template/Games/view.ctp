<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="games panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Game') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $game->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($game, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="gameid">ID</label>
				<div class="form-control" id="gameid"><?= $this->Number->format($game->id) ?></div>
			</div>
			<div class="form-group">
				<label for="gameid">Created</label>
				<div class="form-control" id="gameid"><?= h($game->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="gameuser_id"><?= __('User') ?></label>
				<?= $game->has('user') ? $this->Html->link($game->user->email . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Users', 'action' => 'view', $game->user->id], ['class'=>'btn btn-info', 'id'=>'gameuser_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
