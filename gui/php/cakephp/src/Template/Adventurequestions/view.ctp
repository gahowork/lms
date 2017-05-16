<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Adventurequestion'), ['action' => 'edit', $adventurequestion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Adventurequestion'), ['action' => 'delete', $adventurequestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adventurequestion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Adventurequestions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adventurequestion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Adventures'), ['controller' => 'Adventures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adventure'), ['controller' => 'Adventures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adventurequestions view large-9 medium-8 columns content">
    <h3><?= h($adventurequestion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Adventure') ?></th>
            <td><?= $adventurequestion->has('adventure') ? $this->Html->link($adventurequestion->adventure->id, ['controller' => 'Adventures', 'action' => 'view', $adventurequestion->adventure->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $adventurequestion->has('question') ? $this->Html->link($adventurequestion->question->id, ['controller' => 'Questions', 'action' => 'view', $adventurequestion->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adventurequestion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($adventurequestion->created) ?></td>
        </tr>
    </table>
</div>
