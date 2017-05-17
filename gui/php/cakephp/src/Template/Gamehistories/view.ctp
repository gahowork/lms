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
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $gamehistory->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($gamehistory, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<?= $gamehistory->has('game') ? $this->Html->link($gamehistory->game->id . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Games', 'action' => 'view', $gamehistory->game->id], ['class'=>'btn btn-info', 'id'=>'gamehistorygame_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="gamehistoryquestionanswers_id"><?= __('Questionanswer') ?></label>
				<?= $gamehistory->has('questionanswer') ? $this->Html->link($gamehistory->questionanswer->id . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questionanswers', 'action' => 'view', $gamehistory->questionanswer->id], ['class'=>'btn btn-info', 'id'=>'gamehistoryquestionanswers_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
