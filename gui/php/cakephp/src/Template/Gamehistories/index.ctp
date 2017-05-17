<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="gamehistories panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Gamehistories') ?></div>
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
					<th scope="col"><?= $this->Paginator->sort('game_id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('questionanswers_id') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($gamehistories as $gamehistory): ?>
					<tr>
						<td><?= $this->Number->format($gamehistory->id) ?></td>
						<td><?= h($gamehistory->created) ?></td>
						<td><?= $gamehistory->has('game') ? $this->Html->link($gamehistory->game->id, ['controller' => 'Games', 'action' => 'view', $gamehistory->game->id]) : '' ?></td>
						<td><?= $gamehistory->has('questionanswer') ? $this->Html->link($gamehistory->questionanswer->id, ['controller' => 'Questionanswers', 'action' => 'view', $gamehistory->questionanswer->id]) : '' ?></td>
						<td class="actions">
							<?= $this->Html->link(__('View'), ['action' => 'view', $gamehistory->id], ['class'=>'btn btn-info']) ?>
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
