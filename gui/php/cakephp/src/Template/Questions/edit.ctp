<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questions panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Edit Question') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', ['action' => 'view', $question->id ], ['class'=>'btn btn-success navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">

		<?= $this->Form->create($question) ?>
		<fieldset>
			<?php
						echo $this->Form->input('header',['class'=>'form-control']);
						echo $this->Form->textarea('description',['class'=>'form-control']);
						echo $this->Form->input('questiontype_id', ['class'=>'form-control'], ['options' => $questiontypes]);
			?>
		</fieldset>
		<?= $this->Form->button(__('Submit'),['class'=>'btn btn-warning form-control']) ?>
		<?= $this->Form->end() ?>
	</div>
</div>
