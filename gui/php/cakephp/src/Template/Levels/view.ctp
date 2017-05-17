<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="levels panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Level') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $level->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($level, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="levelid">ID</label>
				<div class="form-control" id="levelid"><?= $this->Number->format($level->id) ?></div>
			</div>
			<div class="form-group">
				<label for="levelid">Created</label>
				<div class="form-control" id="levelid"><?= h($level->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="leveldescription"><?= __('Description') ?></label>
				<div class="form-control" id="leveldescription"><?= h($level->description) ?></div>
			</div>
			<div class="form-group">
				<label for="levelpicture_id"><?= __('Picture') ?></label>
				<?= $level->has('picture') ? $this->Html->link($level->picture->description . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Pictures', 'action' => 'view', $level->picture->id], ['class'=>'btn btn-info', 'id'=>'levelpicture_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="levellevelpoints"><?= __('Levelpoints') ?></label>
				<div class="form-control" id="levellevelpoints"><?= $this->Number->format($level->levelpoints) ?></div>
			</div>
			<div class="form-group">
				<label for="levelleveltarget"><?= __('Leveltarget') ?></label>
				<div class="form-control" id="levelleveltarget"><?= $this->Number->format($level->leveltarget) ?></div>
			</div>

	</fieldset>
	</div>
</div>
