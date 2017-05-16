<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gamehistory'), ['action' => 'edit', $gamehistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gamehistory'), ['action' => 'delete', $gamehistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gamehistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gamehistories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gamehistory'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questionanswers'), ['controller' => 'Questionanswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionanswer'), ['controller' => 'Questionanswers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gamehistories view large-9 medium-8 columns content">
    <h3><?= h($gamehistory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Game') ?></th>
            <td><?= $gamehistory->has('game') ? $this->Html->link($gamehistory->game->id, ['controller' => 'Games', 'action' => 'view', $gamehistory->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Questionanswer') ?></th>
            <td><?= $gamehistory->has('questionanswer') ? $this->Html->link($gamehistory->questionanswer->id, ['controller' => 'Questionanswers', 'action' => 'view', $gamehistory->questionanswer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gamehistory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gamehistory->created) ?></td>
        </tr>
    </table>
</div>
