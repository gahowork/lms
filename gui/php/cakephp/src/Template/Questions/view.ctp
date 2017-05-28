<?php
/**
  * @var \App\View\AppView $this
  */
?>


<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="questions panel panel-default">
			<nav class="panel-heading navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<div class="navbar-brand"><?= __('View Question') ?></div>
					</div>
					<ul class="nav navbar-nav">
						<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
						<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $question->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<?= $this->Form->create($question, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
							<?= $this->Form->hidden('id') ?>
							<button class="btn btn-danger navbar-btn" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
							<?= $this->Form->end() ?>
						</li>
					</ul>
				</div>
			</nav>

			<div class="panel-body">
				<fieldset>
					<div class="form-group">
						<label for="questionid">ID</label>
						<div class="form-control" id="questionid"><?= $this->Number->format($question->id) ?></div>
					</div>
					<div class="form-group">
						<label for="questionid">Created</label>
						<div class="form-control" id="questionid"><?= h($question->created) ?></div>
					</div>
					<hr/>
					<div class="form-group">
						<label for="questionheader"><?= __('Header') ?></label>
						<div class="form-control" id="questionheader"><?= h($question->header) ?></div>
					</div>
					<div class="form-group">
						<label for="questiondescription"><?= __('Description') ?></label>
						<div class="form-control" id="questiondescription"><?= $question->description ?></div>
					</div>
					<div class="form-group">
						<label for="questionquestiontype_id"><?= __('Questiontype') ?></label>
						<div class="form-control" id="questionquestiontype_id"><?= h($question->questiontype->description) ?></div>
					</div>

			</fieldset>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<?= $this->element('ModifyTable/questionanswer_table') ?>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<span><?= __('Question configuration') ?></span>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?= $this->element('ModifyTable/questioncategory_table') ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?= $this->element('ModifyTable/questionlevel_table') ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?= $this->element('ModifyTable/adventurequestion_byquestion_table') ?>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<?= $this->element('ModifyTable/questionpicture_table') ?>
			</div>
		</div>
	</div>
</div>
