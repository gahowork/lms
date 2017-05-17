<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="categories panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Category') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($category, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="categoryid">ID</label>
				<div class="form-control" id="categoryid"><?= $this->Number->format($category->id) ?></div>
			</div>
			<div class="form-group">
				<label for="categoryid">Created</label>
				<div class="form-control" id="categoryid"><?= h($category->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="categorydescription"><?= __('Description') ?></label>
				<div class="form-control" id="categorydescription"><?= h($category->description) ?></div>
			</div>
			<div class="form-group">
				<label for="categorypicture_id"><?= __('Picture') ?></label>
				<?= $category->has('picture') ? $this->Html->link($category->picture->description . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Pictures', 'action' => 'view', $category->picture->id], ['class'=>'btn btn-info', 'id'=>'categorypicture_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
