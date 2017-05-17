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
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $answerpicture->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($answerpicture, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<?= $answerpicture->has('answer') ? $this->Html->link('<span class="label">' . $answerpicture->answer->description . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Answers', 'action' => 'view', $answerpicture->answer->id], ['class'=>'btn btn-info', 'id'=>'answerpictureanswer_id', 'escape'=>false]) : '' ?>
			</div>
			<div class="form-group">
				<label for="answerpicturepicture_id"><?= __('Picture') ?></label>
				<?= $answerpicture->has('picture') ? $this->Html->link('<span class="label">' . $answerpicture->picture->description . '</span> <span class="glyphicon glyphicon-zoom-in"></span>', ['controller' => 'Pictures', 'action' => 'view', $answerpicture->picture->id], ['class'=>'btn btn-info', 'id'=>'answerpicturepicture_id', 'escape'=>false]) : '' ?>
			</div>

	</fieldset>
	</div>
</div>
