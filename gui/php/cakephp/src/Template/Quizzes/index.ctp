
<div class="panel panel-info">
	<div class="panel-heading">Quizzes</div>
	<div class="panel-body">

		<div class="panel panel-default">
			<div class="panel-body">
				<span class=""></span>
			</div>
			<div class="panel-footer">
				<?= $this->Html->link(
					'Do just some random questions',
					['controller'=>'Quizzes', 'action'=>'Randomquestion'],
					['class'=>'btn btn-info form-control']
				) ?>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				<span class=""></span>
			</div>
			<div class="panel-footer">
				<?= $this->Html->link(
					'Do some questions by category',
					['controller'=>'Quizzes', 'action'=>'Selectcategory'],
					['class'=>'btn btn-info form-control']
				) ?>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				<span class=""></span>
			</div>
			<div class="panel-footer">
				<?= $this->Html->link(
					'Do an adventure',
					['controller'=>'Quizzes', 'action'=>'Selectadventure'],
					['class'=>'btn btn-info form-control']
				) ?>
			</div>
		</div>

	</div>
</div>
