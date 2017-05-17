<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="gamehistories panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Add Gamehistory') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">

	    <?= $this->Form->create($gamehistory) ?>
	    <fieldset>
	        <?php
	            echo $this->Form->input('game_id', ['class'=>'form-control'], ['options' => $games]);
	            echo $this->Form->input('questionanswers_id', ['class'=>'form-control'], ['options' => $questionanswers]);
	        ?>
	    </fieldset>
	    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success form-control']) ?>
	    <?= $this->Form->end() ?>
	</div>
</div>
