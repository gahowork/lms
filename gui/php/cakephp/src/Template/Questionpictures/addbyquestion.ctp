<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="questionpictures panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Add Picture') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-backward"></span>', ['controller'=>'questions', 'action' => 'view', $questionpicture->question_id], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">
		<?= $this->Form->create($questionpicture) ?>
		<fieldset>
			<?php
				echo $this->element(
					'Gui/pictureSelect',
					[
						'options'=>[
							'caption'=>__('Choose image'),
							'selectedobject'=>$questionpicture,
							'imagelist'=>$pictures
						]
					]
				);
			?>
		</fieldset>
		<?= $this->Form->button(__('Submit'),['class'=>'btn btn-success form-control']) ?>
		<?= $this->Form->end() ?>
	</div>
</div>
