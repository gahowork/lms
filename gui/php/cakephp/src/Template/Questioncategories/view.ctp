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
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $questioncategory->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($questioncategory, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<?= $questioncategory->has('question') ? $this->Html->link('<span class="label">' . $questioncategory->question->header . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questions', 'action' => 'view', $questioncategory->question->id], ['class'=>'btn btn-info', 'id'=>'questioncategoryquestion_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="questioncategorycategory_id"><?= __('Category') ?></label>
				<?= $questioncategory->has('category') ? $this->Html->link('<span class="label">' . $questioncategory->category->description . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Categories', 'action' => 'view', $questioncategory->category->id], ['class'=>'btn btn-info', 'id'=>'questioncategorycategory_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
