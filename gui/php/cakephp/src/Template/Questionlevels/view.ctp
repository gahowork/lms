<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questionlevel'), ['action' => 'edit', $questionlevel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questionlevel'), ['action' => 'delete', $questionlevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionlevel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questionlevels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionlevel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionlevels view large-9 medium-8 columns content">
    <h3><?= h($questionlevel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $questionlevel->has('question') ? $this->Html->link($questionlevel->question->id, ['controller' => 'Questions', 'action' => 'view', $questionlevel->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $questionlevel->has('level') ? $this->Html->link($questionlevel->level->id, ['controller' => 'Levels', 'action' => 'view', $questionlevel->level->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionlevel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($questionlevel->created) ?></td>
        </tr>
    </table>
</div>
