<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Questionpicture'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Pictures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionpictures index large-9 medium-8 columns content">
    <h3><?= __('Questionpictures') ?></h3>
    <table cellpadding="0" cellspacing="0">
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
                <td><?= $questionpicture->has('question') ? $this->Html->link($questionpicture->question->id, ['controller' => 'Questions', 'action' => 'view', $questionpicture->question->id]) : '' ?></td>
                <td><?= $questionpicture->has('picture') ? $this->Html->link($questionpicture->picture->id, ['controller' => 'Pictures', 'action' => 'view', $questionpicture->picture->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $questionpicture->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionpicture->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $questionpicture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionpicture->id)]) ?>
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
