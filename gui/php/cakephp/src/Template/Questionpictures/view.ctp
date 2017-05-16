<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questionpicture'), ['action' => 'edit', $questionpicture->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questionpicture'), ['action' => 'delete', $questionpicture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionpicture->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questionpictures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionpicture'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Pictures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionpictures view large-9 medium-8 columns content">
    <h3><?= h($questionpicture->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $questionpicture->has('question') ? $this->Html->link($questionpicture->question->id, ['controller' => 'Questions', 'action' => 'view', $questionpicture->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Picture') ?></th>
            <td><?= $questionpicture->has('picture') ? $this->Html->link($questionpicture->picture->id, ['controller' => 'Pictures', 'action' => 'view', $questionpicture->picture->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionpicture->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($questionpicture->created) ?></td>
        </tr>
    </table>
</div>
