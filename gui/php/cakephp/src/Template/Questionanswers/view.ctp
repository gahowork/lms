<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Questionanswer'), ['action' => 'edit', $questionanswer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Questionanswer'), ['action' => 'delete', $questionanswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionanswer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questionanswers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionanswer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionanswers view large-9 medium-8 columns content">
    <h3><?= h($questionanswer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= $questionanswer->has('question') ? $this->Html->link($questionanswer->question->id, ['controller' => 'Questions', 'action' => 'view', $questionanswer->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answer') ?></th>
            <td><?= $questionanswer->has('answer') ? $this->Html->link($questionanswer->answer->id, ['controller' => 'Answers', 'action' => 'view', $questionanswer->answer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionanswer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($questionanswer->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Result') ?></h4>
        <?= $this->Text->autoParagraph(h($questionanswer->result)); ?>
    </div>
</div>
