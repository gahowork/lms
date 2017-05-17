<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="users panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Edit User') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><?= $this->Html->link(__('Index'), ['action' => 'index'], ['class'=>'btn btn-default']) ?></li>
				<li><?= $this->Html->link(__('View'), ['action' => 'view', $user->id ], ['class'=>'btn btn-default']) ?></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">

	    <?= $this->Form->create($user) ?>
	    <fieldset>
	        <?php
	            echo $this->Form->input('email',['class'=>'form-control']);
	            echo $this->Form->input('password',['class'=>'form-control']);
	            echo $this->Form->input('usergroup_id', ['class'=>'form-control'], ['options' => $usergroups]);
	        ?>
	    </fieldset>
	    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success form-control']) ?>
	    <?= $this->Form->end() ?>
	</div>
</div>
