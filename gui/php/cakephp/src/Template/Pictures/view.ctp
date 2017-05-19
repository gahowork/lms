<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="pictures panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('View Picture') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-th-list"></span>', ['action' => 'index'], ['class'=>'btn btn-info navbar-btn', 'escape'=>false]) ?></div></li>
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span>', ['action' => 'edit', $picture->id], ['class'=>'btn btn-warning navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<?= $this->Form->create($picture, ['type'=>'post', 'url'=>['action'=>'delete']]) ?>
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
				<label for="pictureid">ID</label>
				<div class="form-control" id="pictureid"><?= $this->Number->format($picture->id) ?></div>
			</div>
			<div class="form-group">
				<label for="pictureid">Created</label>
				<div class="form-control" id="pictureid"><?= h($picture->created) ?></div>
			</div>
			<hr/>
			<div class="form-group">
				<label for="picturedescription"><?= __('Description') ?></label>
				<div class="form-control" id="picturedescription"><?= h($picture->description) ?></div>
			</div>
			<div class="form-group">
				<div>
					<label for="picturedescription"><?= __('Picture') ?></label>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
						<?php echo $this->Html->image(['controller'=>'img', 'action'=>'upload', $picture->filename ], ['class'=>'img-rounded img-responsive']);?>
					</div>
				</div>
			</div>
	</fieldset>
	</div>
</div>
