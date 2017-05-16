<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Game'), ['action' => 'edit', $game->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Game'), ['action' => 'delete', $game->id], ['confirm' => __('Are you sure you want to delete # {0}?', $game->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gamehistories'), ['controller' => 'Gamehistories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gamehistory'), ['controller' => 'Gamehistories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="games view large-9 medium-8 columns content">
    <h3><?= h($game->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $game->has('user') ? $this->Html->link($game->user->id, ['controller' => 'Users', 'action' => 'view', $game->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($game->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($game->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Gamehistories') ?></h4>
        <?php if (!empty($game->gamehistories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Game Id') ?></th>
                <th scope="col"><?= __('Questionanswers Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->gamehistories as $gamehistories): ?>
            <tr>
                <td><?= h($gamehistories->id) ?></td>
                <td><?= h($gamehistories->created) ?></td>
                <td><?= h($gamehistories->game_id) ?></td>
                <td><?= h($gamehistories->questionanswers_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Gamehistories', 'action' => 'view', $gamehistories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Gamehistories', 'action' => 'edit', $gamehistories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Gamehistories', 'action' => 'delete', $gamehistories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gamehistories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
