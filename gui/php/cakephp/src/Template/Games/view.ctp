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
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $game->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($game, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<?= $game->has('user') ? $this->Html->link('<span class="label">' . $game->user->email . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Users', 'action' => 'view', $game->user->id], ['class'=>'btn btn-info', 'id'=>'gameuser_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
