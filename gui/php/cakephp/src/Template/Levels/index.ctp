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
				<li><?= $this->Html->link(__('Add'), ['action' => 'add'], ['class'=>'btn btn-default']) ?></li>
			</ul>
		</div>
	</nav>

	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('created') ?></th>
					<th scope="col"><?= $this->Paginator->sort('description') ?></th>
					<th scope="col"><?= $this->Paginator->sort('picture_id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('levelpoints') ?></th>
					<th scope="col"><?= $this->Paginator->sort('leveltarget') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($levels as $level): ?>
					<tr>
						<td><?= $this->Number->format($level->id) ?></td>
						<td><?= h($level->created) ?></td>
						<td><?= h($level->description) ?></td>
						<td><?= $level->has('picture') ? $this->Html->link($level->picture->description, ['controller' => 'Pictures', 'action' => 'view', $level->picture->id]) : '' ?></td>
						<td><?= $this->Number->format($level->levelpoints) ?></td>
						<td><?= $this->Number->format($level->leveltarget) ?></td>
						<td class="actions">
							<?= $this->Html->link(__('View'), ['action' => 'view', $level->id], ['class'=>'btn btn-info']) ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
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
