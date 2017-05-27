
<div class="questionanswerpictures panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Add Picture') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-backward"></span>', ['controller'=>'questionanswers', 'action' => 'viewbyquestion', $questionanswerpicture->questionanswer_id], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', ['action' => 'viewbyquestionanswer', $questionanswerpicture->id], ['class'=>'btn btn-success navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($questionanswerpicture, ['type'=>'post', 'url'=>['action'=>'deletebyquestionanswer']]) ?>
					<?= $this->Form->hidden('id') ?>
					<button class="btn btn-danger navbar-btn" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
					<?= $this->Form->end() ?>
				</li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">
		<?= $this->Form->create($questionanswerpicture) ?>
		<?= $this->Form->hidden('questionanswer_id') ?>
		<fieldset>
			<?php
				echo $this->element(
					'Gui/pictureSelect',
					[
						'options'=>[
							'caption'=>__('Choose image'),
							'selectedobject'=>$questionanswerpicture,
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
