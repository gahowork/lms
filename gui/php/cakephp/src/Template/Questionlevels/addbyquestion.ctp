<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questionlevels panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Add Level') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-backward"></span>', ['controller'=>'questions', 'action' => 'view', $questionlevel->question_id], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">

		<?= $this->Form->create($questionlevel) ?>
		<?= $this->Form->hidden('question_id') ?>
		<fieldset>
			<?php
						echo $this->Form->input('level_id', ['class'=>'form-control'], ['options' => $levels]);
			?>
		</fieldset>
		<?= $this->Form->button(__('Submit'),['class'=>'btn btn-success form-control']) ?>
		<?= $this->Form->end() ?>
	</div>
</div>
