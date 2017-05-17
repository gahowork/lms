<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="answers panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Answer') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('Edit'), ['action' => 'edit', $answer->id], ['class'=>'btn btn-default']) ?></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($answer, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="answerid">ID</label>
				<div class="form-control" id="answerid"><?= $this->Number->format($answer->id) ?></div>
			</div>
			<div class="form-group">
				<label for="answerid">Created</label>
				<div class="form-control" id="answerid"><?= h($answer->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="answerdescription"><?= __('Description') ?></label>
				<div class="form-control" id="answerdescription"><?= h($answer->description) ?></div>
			</div>

	</fieldset>
	</div>
</div>
