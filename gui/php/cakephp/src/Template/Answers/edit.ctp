<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="answers panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Edit Answer') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('View'), ['action' => 'view', $answer->id ], ['class'=>'btn btn-default']) ?></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">

	    <?= $this->Form->create($answer) ?>
	    <fieldset>
	        <?php
	            echo $this->Form->input('description',['class'=>'form-control']);
	        ?>
	    </fieldset>
	    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success form-control']) ?>
	    <?= $this->Form->end() ?>
	</div>
</div>
