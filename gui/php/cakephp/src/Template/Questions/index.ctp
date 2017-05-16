<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questiontypes'), ['controller' => 'Questiontypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questiontype'), ['controller' => 'Questiontypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Adventurequestions'), ['controller' => 'Adventurequestions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Adventurequestion'), ['controller' => 'Adventurequestions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionanswers'), ['controller' => 'Questionanswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionanswer'), ['controller' => 'Questionanswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questioncategories'), ['controller' => 'Questioncategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questioncategory'), ['controller' => 'Questioncategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionlevels'), ['controller' => 'Questionlevels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionlevel'), ['controller' => 'Questionlevels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionpictures'), ['controller' => 'Questionpictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionpicture'), ['controller' => 'Questionpictures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions index large-9 medium-8 columns content">
    <h3><?= __('Questions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('header') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('questiontype_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= $this->Number->format($question->id) ?></td>
                <td><?= h($question->created) ?></td>
                <td><?= h($question->header) ?></td>
                <td><?= h($question->description) ?></td>
                <td><?= $question->has('questiontype') ? $this->Html->link($question->questiontype->id, ['controller' => 'Questiontypes', 'action' => 'view', $question->questiontype->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $question->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?>
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
