<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questionlevels panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Add Questionlevel') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">

	    <?= $this->Form->create($questionlevel) ?>
	    <fieldset>
	        <?php
	            echo $this->Form->input('question_id', ['class'=>'form-control'], ['options' => $questions]);
	            echo $this->Form->input('level_id', ['class'=>'form-control'], ['options' => $levels]);
	        ?>
	    </fieldset>
	    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success form-control']) ?>
	    <?= $this->Form->end() ?>
	</div>
</div>
