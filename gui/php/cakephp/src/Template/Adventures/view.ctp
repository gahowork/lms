<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Adventure'), ['action' => 'edit', $adventure->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Adventure'), ['action' => 'delete', $adventure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adventure->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Adventures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adventure'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Adventurequestions'), ['controller' => 'Adventurequestions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adventurequestion'), ['controller' => 'Adventurequestions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adventures view large-9 medium-8 columns content">
    <h3><?= h($adventure->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($adventure->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adventure->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($adventure->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Adventurequestions') ?></h4>
        <?php if (!empty($adventure->adventurequestions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Adventure Id') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($adventure->adventurequestions as $adventurequestions): ?>
            <tr>
                <td><?= h($adventurequestions->id) ?></td>
                <td><?= h($adventurequestions->created) ?></td>
                <td><?= h($adventurequestions->adventure_id) ?></td>
                <td><?= h($adventurequestions->question_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Adventurequestions', 'action' => 'view', $adventurequestions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Adventurequestions', 'action' => 'edit', $adventurequestions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Adventurequestions', 'action' => 'delete', $adventurequestions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adventurequestions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
