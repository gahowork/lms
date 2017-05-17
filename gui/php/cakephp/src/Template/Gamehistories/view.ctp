<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="gamehistories panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Gamehistory') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $gamehistory->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($gamehistory, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="gamehistoryid">ID</label>
				<div class="form-control" id="gamehistoryid"><?= $this->Number->format($gamehistory->id) ?></div>
			</div>
			<div class="form-group">
				<label for="gamehistoryid">Created</label>
				<div class="form-control" id="gamehistoryid"><?= h($gamehistory->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="gamehistorygame_id"><?= __('Game') ?></label>
				<?= $gamehistory->has('game') ? $this->Html->link('<span class="label">' . $gamehistory->game->id . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Games', 'action' => 'view', $gamehistory->game->id], ['class'=>'btn btn-info', 'id'=>'gamehistorygame_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="gamehistoryquestionanswers_id"><?= __('Questionanswer') ?></label>
				<?= $gamehistory->has('questionanswer') ? $this->Html->link('<span class="label">' . $gamehistory->questionanswer->id . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questionanswers', 'action' => 'view', $gamehistory->questionanswer->id], ['class'=>'btn btn-info', 'id'=>'gamehistoryquestionanswers_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
