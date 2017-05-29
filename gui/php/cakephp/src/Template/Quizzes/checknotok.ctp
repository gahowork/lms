<div class="checkpanel panel panel-danger">
	<div class="panel-heading">ups... thats not correct</div>
	<div class="panel-body">
		The correct answer is: <b><?= h($rightAnswer->answer) ?></b>
	</div>
	<div class="panel-footer">
		<?= $this->Html->link(
			__('Try next question'),
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
