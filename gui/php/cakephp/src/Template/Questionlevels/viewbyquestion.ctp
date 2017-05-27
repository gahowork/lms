<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questionlevels panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Level') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-backward"></span>', ['controller'=>'questions', 'action' => 'view', $questionlevel->question_id], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'editbyquestion', $questionlevel->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($questionlevel, ['type'=>'post', 'url'=>['action'=>'deletebyquestion']]) ?>
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
				<label for="questionlevellevel_id"><?= __('Level') ?></label>
				<?= $questionlevel->has('level') ? $this->Html->link('<span class="label">' . $questionlevel->level->description . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Levels', 'action' => 'view', $questionlevel->level->id], ['class'=>'btn btn-info', 'id'=>'questionlevellevel_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
