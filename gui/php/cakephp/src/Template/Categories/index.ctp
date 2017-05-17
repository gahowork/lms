<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="categories panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Categories') ?></div>
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
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($categories as $category): ?>
					<tr>
						<td><?= $this->Number->format($category->id) ?></td>
						<td><?= h($category->created) ?></td>
						<td><?= h($category->description) ?></td>
						<td><?= $category->has('picture') ? $this->Html->link($category->picture->description, ['controller' => 'Pictures', 'action' => 'view', $category->picture->id]) : '' ?></td>
						<td class="actions">
							<?= $this->Html->link(__('View'), ['action' => 'view', $category->id], ['class'=>'btn btn-info']) ?>
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
