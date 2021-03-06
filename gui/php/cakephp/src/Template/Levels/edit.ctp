<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="levels panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Edit Level') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', ['action' => 'view', $level->id ], ['class'=>'btn btn-success navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">

		<?= $this->Form->create($level) ?>
		<fieldset>
			<?php
						echo $this->Form->input('description',['class'=>'form-control']);
						echo $this->Form->input('levelpoints',['class'=>'form-control']);
						echo $this->Form->input('leveltarget',['class'=>'form-control']);
						echo $this->Form->input('picture_id', ['class'=>'form-control'], ['options' => $pictures]);
			?>
		</fieldset>
		<?= $this->Form->button(__('Submit'),['class'=>'btn btn-warning form-control']) ?>
		<?= $this->Form->end() ?>
	</div>
</div>
