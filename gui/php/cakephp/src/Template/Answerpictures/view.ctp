<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Answerpicture'), ['action' => 'edit', $answerpicture->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Answerpicture'), ['action' => 'delete', $answerpicture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answerpicture->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Answerpictures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answerpicture'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Pictures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="answerpictures view large-9 medium-8 columns content">
    <h3><?= h($answerpicture->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Answer') ?></th>
            <td><?= $answerpicture->has('answer') ? $this->Html->link($answerpicture->answer->id, ['controller' => 'Answers', 'action' => 'view', $answerpicture->answer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Picture') ?></th>
            <td><?= $answerpicture->has('picture') ? $this->Html->link($answerpicture->picture->id, ['controller' => 'Pictures', 'action' => 'view', $answerpicture->picture->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($answerpicture->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($answerpicture->created) ?></td>
        </tr>
    </table>
</div>
