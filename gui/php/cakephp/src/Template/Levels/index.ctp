<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="levels panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Levels') ?></div>
			</div>
			<ul class="nav navbar-nav">
				<li><div><?= $this->Html->link('<span class="glyphicon glyphicon-plus-sign"></span>', ['action' => 'add'], ['class'=>'btn btn-success navbar-btn', 'escape'=>false]) ?></div></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">
		<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th class="id" scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th class="created" scope="col"><?= $this->Paginator->sort('created') ?></th>
					<th class="description" scope="col"><?= $this->Paginator->sort('description') ?></th>
					<th scope="col"><?= $this->Paginator->sort('levelpoints') ?></th>
					<th scope="col"><?= $this->Paginator->sort('leveltarget') ?></th>
					<th scope="col" class="actions"></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($levels as $level): ?>
					<tr>
						<td class="id"><?= $this->Number->format($level->id) ?></td>
						<td class="created"><?= h($level->created) ?></td>
						<td class="description"><?= h($level->description) ?></td>
						<td><?= $this->Number->format($level->levelpoints) ?></td>
						<td><?= $this->Number->format($level->leveltarget) ?></td>
						<td class="actions">
							<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', ['action' => 'view', $level->id], ['class'=>'btn btn-info', 'escape'=>false]) ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	</div>

	<div class="panel-footer text-center">
		<ul class="pagination">
			<?= $this->Paginator->first('<< ' . __('first')) ?>
			<?= $this->Paginator->prev('< ' . __('previous')) ?>
			<?= $this->Paginator->numbers() ?>
			<?= $this->Paginator->next(__('next') . ' >') ?>
			<?= $this->Paginator->last(__('last') . ' >>') ?>
		</ul>
		<div><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></div>

	</div>
</div>
