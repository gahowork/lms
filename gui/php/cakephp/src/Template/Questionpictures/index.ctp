<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="questionpictures panel panel-default">
	<nav class="panel-heading navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand"><?= __('Questionpictures') ?></div>
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
					<th scope="col"><?= $this->Paginator->sort('question_id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('picture_id') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($questionpictures as $questionpicture): ?>
					<tr>
						<td><?= $this->Number->format($questionpicture->id) ?></td>
						<td><?= h($questionpicture->created) ?></td>
						<td><?= $questionpicture->has('question') ? $this->Html->link($questionpicture->question->header, ['controller' => 'Questions', 'action' => 'view', $questionpicture->question->id]) : '' ?></td>
						<td><?= $questionpicture->has('picture') ? $this->Html->link($questionpicture->picture->description, ['controller' => 'Pictures', 'action' => 'view', $questionpicture->picture->id]) : '' ?></td>
						<td class="actions">
							<?= $this->Html->link(__('View'), ['action' => 'view', $questionpicture->id], ['class'=>'btn btn-info']) ?>
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
