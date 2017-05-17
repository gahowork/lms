<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questionpictures panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Questionpicture') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $questionpicture->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($questionpicture, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="questionpictureid">ID</label>
				<div class="form-control" id="questionpictureid"><?= $this->Number->format($questionpicture->id) ?></div>
			</div>
			<div class="form-group">
				<label for="questionpictureid">Created</label>
				<div class="form-control" id="questionpictureid"><?= h($questionpicture->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="questionpicturequestion_id"><?= __('Question') ?></label>
				<?= $questionpicture->has('question') ? $this->Html->link('<span class="label">' . $questionpicture->question->header . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Questions', 'action' => 'view', $questionpicture->question->id], ['class'=>'btn btn-info', 'id'=>'questionpicturequestion_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="questionpicturepicture_id"><?= __('Picture') ?></label>
				<?= $questionpicture->has('picture') ? $this->Html->link('<span class="label">' . $questionpicture->picture->description . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Pictures', 'action' => 'view', $questionpicture->picture->id], ['class'=>'btn btn-info', 'id'=>'questionpicturepicture_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
