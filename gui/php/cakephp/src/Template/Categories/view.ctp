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
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $category->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($category, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
			<?= $this->Element('Gui/pictureViewForm',['picture'=>$category->picture]) ?>
	</fieldset>
	</div>
</div>
