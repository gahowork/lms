<div class="checkpanel panel panel-success">
	<div class="panel-heading"><?= __('Absolutely right') ?></div>
	<div class="panel-body">
		todo: any success mesage for user...
	</div>
	<div class="panel-footer">
		<?= $this->Html->link(
			__('Next question'),
			[
				'controller'=>'quizzes',
				'action'=>'randomquestion'
			],
			[
				'class'=>'btn btn-info form-control'
			]
		) ?>
	</div>
</div>
