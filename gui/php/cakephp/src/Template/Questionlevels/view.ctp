<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questionlevels panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Questionlevel') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $questionlevel->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($questionlevel, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="questionlevelid">ID</label>
				<div class="form-control" id="questionlevelid"><?= $this->Number->format($questionlevel->id) ?></div>
			</div>
			<div class="form-group">
				<label for="questionlevelid">Created</label>
				<div class="form-control" id="questionlevelid"><?= h($questionlevel->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="questionlevelquestion_id"><?= __('Question') ?></label>
				<?= $questionlevel->has('question') ? $this->Html->link('<span class="label">' . $questionlevel->question->header . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questions', 'action' => 'view', $questionlevel->question->id], ['class'=>'btn btn-info', 'id'=>'questionlevelquestion_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="questionlevellevel_id"><?= __('Level') ?></label>
				<?= $questionlevel->has('level') ? $this->Html->link('<span class="label">' . $questionlevel->level->description . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Levels', 'action' => 'view', $questionlevel->level->id], ['class'=>'btn btn-info', 'id'=>'questionlevellevel_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
