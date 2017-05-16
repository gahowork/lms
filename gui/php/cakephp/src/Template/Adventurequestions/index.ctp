<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Adventurequestion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Adventures'), ['controller' => 'Adventures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Adventure'), ['controller' => 'Adventures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adventurequestions index large-9 medium-8 columns content">
    <h3><?= __('Adventurequestions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adventure_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adventurequestions as $adventurequestion): ?>
            <tr>
                <td><?= $this->Number->format($adventurequestion->id) ?></td>
                <td><?= h($adventurequestion->created) ?></td>
                <td><?= $adventurequestion->has('adventure') ? $this->Html->link($adventurequestion->adventure->id, ['controller' => 'Adventures', 'action' => 'view', $adventurequestion->adventure->id]) : '' ?></td>
                <td><?= $adventurequestion->has('question') ? $this->Html->link($adventurequestion->question->id, ['controller' => 'Questions', 'action' => 'view', $adventurequestion->question->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adventurequestion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adventurequestion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adventurequestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adventurequestion->id)]) ?>
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
