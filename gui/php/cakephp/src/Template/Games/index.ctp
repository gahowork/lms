<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="games panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Games') ?></div>
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
					<th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
					<th scope="col" class="actions"></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($games as $game): ?>
					<tr>
						<td class="id"><?= $this->Number->format($game->id) ?></td>
						<td class="created"><?= h($game->created) ?></td>
						<td><?= $game->has('user') ? $this->Html->link($game->user->email, ['controller' => 'Users', 'action' => 'view', $game->user->id]) : '' ?></td>
						<td class="actions">
							<?= $this->Html->link('<span class="glyphicon glyphicon-eye-open"></span>', ['action' => 'view', $game->id], ['class'=>'btn btn-info', 'escape'=>false]) ?>
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
