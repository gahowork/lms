<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Adventure'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Adventurequestions'), ['controller' => 'Adventurequestions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Adventurequestion'), ['controller' => 'Adventurequestions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adventures index large-9 medium-8 columns content">
    <h3><?= __('Adventures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adventures as $adventure): ?>
            <tr>
                <td><?= $this->Number->format($adventure->id) ?></td>
                <td><?= h($adventure->created) ?></td>
                <td><?= h($adventure->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adventure->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adventure->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adventure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adventure->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
