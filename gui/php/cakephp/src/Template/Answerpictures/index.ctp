<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Answerpicture'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Pictures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="answerpictures index large-9 medium-8 columns content">
    <h3><?= __('Answerpictures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('answer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('picture_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($answerpictures as $answerpicture): ?>
            <tr>
                <td><?= $this->Number->format($answerpicture->id) ?></td>
                <td><?= h($answerpicture->created) ?></td>
                <td><?= $answerpicture->has('answer') ? $this->Html->link($answerpicture->answer->id, ['controller' => 'Answers', 'action' => 'view', $answerpicture->answer->id]) : '' ?></td>
                <td><?= $answerpicture->has('picture') ? $this->Html->link($answerpicture->picture->id, ['controller' => 'Pictures', 'action' => 'view', $answerpicture->picture->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $answerpicture->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $answerpicture->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $answerpicture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answerpicture->id)]) ?>
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
