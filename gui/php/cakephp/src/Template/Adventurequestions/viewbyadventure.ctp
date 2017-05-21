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
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-backward"></span>', ['controller'=>'adventures', 'action' => 'view', $adventurequestion->adventure_id], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'editbyadventure', $adventurequestion->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($adventurequestion, ['type'=>'post', 'url'=>['action'=>'deletebyadventure', $adventurequestion->id]]) ?>
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
				<label for="adventurequestionquestion_id"><?= __('Question') ?></label>
				<?= $adventurequestion->has('question') ? $this->Html->link('<span class="label">' . $adventurequestion->question->header . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questions', 'action' => 'view', $adventurequestion->question->id], ['class'=>'btn btn-info', 'id'=>'adventurequestionquestion_id', 'escape'=>false]) : '' ?>
			</div>
	</fieldset>
	</div>
</div>
