<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="adventurequestions panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Edit Adventurequestion') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', ['action' => 'view', $adventurequestion->id ], ['class'=>'btn btn-success navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">

		<?= $this->Form->create($adventurequestion) ?>
		<fieldset>
			<?php
						echo $this->Form->input('adventure_id', ['class'=>'form-control'], ['options' => $adventures]);
						echo $this->Form->input('question_id', ['class'=>'form-control'], ['options' => $questions]);
			?>
		</fieldset>
		<?= $this->Form->button(__('Submit'),['class'=>'btn btn-warning form-control']) ?>
		<?= $this->Form->end() ?>
	</div>
</div>
