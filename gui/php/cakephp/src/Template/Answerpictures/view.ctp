<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="answerpictures panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Answerpicture') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $answerpicture->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($answerpicture, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="answerpictureid">ID</label>
				<div class="form-control" id="answerpictureid"><?= $this->Number->format($answerpicture->id) ?></div>
			</div>
			<div class="form-group">
				<label for="answerpictureid">Created</label>
				<div class="form-control" id="answerpictureid"><?= h($answerpicture->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="answerpictureanswer_id"><?= __('Answer') ?></label>
				<?= $answerpicture->has('answer') ? $this->Html->link($answerpicture->answer->description . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Answers', 'action' => 'view', $answerpicture->answer->id], ['class'=>'btn btn-info', 'id'=>'answerpictureanswer_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="answerpicturepicture_id"><?= __('Picture') ?></label>
				<?= $answerpicture->has('picture') ? $this->Html->link($answerpicture->picture->description . ' <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Pictures', 'action' => 'view', $answerpicture->picture->id], ['class'=>'btn btn-info', 'id'=>'answerpicturepicture_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
