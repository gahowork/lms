<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="categories panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Add Category') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">

	    <?= $this->Form->create($category) ?>
	    <fieldset>
	        <?php
	            echo $this->Form->input('description',['class'=>'form-control']);
	            echo $this->Form->input('picture_id', ['class'=>'form-control'], ['options' => $pictures]);
	        ?>
	    </fieldset>
	    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success form-control']) ?>
	    <?= $this->Form->end() ?>
	</div>
</div>
