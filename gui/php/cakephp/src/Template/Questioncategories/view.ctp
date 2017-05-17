<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questioncategories panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Questioncategory') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $questioncategory->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($questioncategory, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="questioncategoryid">ID</label>
				<div class="form-control" id="questioncategoryid"><?= $this->Number->format($questioncategory->id) ?></div>
			</div>
			<div class="form-group">
				<label for="questioncategoryid">Created</label>
				<div class="form-control" id="questioncategoryid"><?= h($questioncategory->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="questioncategoryquestion_id"><?= __('Question') ?></label>
				<?= $questioncategory->has('question') ? $this->Html->link($questioncategory->question->header . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questions', 'action' => 'view', $questioncategory->question->id], ['class'=>'btn btn-info', 'id'=>'questioncategoryquestion_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="questioncategorycategory_id"><?= __('Category') ?></label>
				<?= $questioncategory->has('category') ? $this->Html->link($questioncategory->category->description . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Categories', 'action' => 'view', $questioncategory->category->id], ['class'=>'btn btn-info', 'id'=>'questioncategorycategory_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
