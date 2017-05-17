<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="adventurequestions panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Adventurequestion') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $adventurequestion->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($adventurequestion, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="adventurequestionid">ID</label>
				<div class="form-control" id="adventurequestionid"><?= $this->Number->format($adventurequestion->id) ?></div>
			</div>
			<div class="form-group">
				<label for="adventurequestionid">Created</label>
				<div class="form-control" id="adventurequestionid"><?= h($adventurequestion->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="adventurequestionadventure_id"><?= __('Adventure') ?></label>
				<?= $adventurequestion->has('adventure') ? $this->Html->link($adventurequestion->adventure->description . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Adventures', 'action' => 'view', $adventurequestion->adventure->id], ['class'=>'btn btn-info', 'id'=>'adventurequestionadventure_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="adventurequestionquestion_id"><?= __('Question') ?></label>
				<?= $adventurequestion->has('question') ? $this->Html->link($adventurequestion->question->header . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questions', 'action' => 'view', $adventurequestion->question->id], ['class'=>'btn btn-info', 'id'=>'adventurequestionquestion_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
