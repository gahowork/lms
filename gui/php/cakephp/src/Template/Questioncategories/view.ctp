<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questioncategory'), ['action' => 'edit', $questioncategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questioncategory'), ['action' => 'delete', $questioncategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questioncategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questioncategories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questioncategory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questioncategories view large-9 medium-8 columns content">
    <h3><?= h($questioncategory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $questioncategory->has('question') ? $this->Html->link($questioncategory->question->id, ['controller' => 'Questions', 'action' => 'view', $questioncategory->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $questioncategory->has('category') ? $this->Html->link($questioncategory->category->id, ['controller' => 'Categories', 'action' => 'view', $questioncategory->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questioncategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($questioncategory->created) ?></td>
        </tr>
    </table>
</div>
