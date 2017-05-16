<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gamehistory'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionanswers'), ['controller' => 'Questionanswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionanswer'), ['controller' => 'Questionanswers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gamehistories index large-9 medium-8 columns content">
    <h3><?= __('Gamehistories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('questionanswers_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gamehistories as $gamehistory): ?>
            <tr>
                <td><?= $this->Number->format($gamehistory->id) ?></td>
                <td><?= h($gamehistory->created) ?></td>
                <td><?= $gamehistory->has('game') ? $this->Html->link($gamehistory->game->id, ['controller' => 'Games', 'action' => 'view', $gamehistory->game->id]) : '' ?></td>
                <td><?= $gamehistory->has('questionanswer') ? $this->Html->link($gamehistory->questionanswer->id, ['controller' => 'Questionanswers', 'action' => 'view', $gamehistory->questionanswer->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gamehistory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gamehistory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gamehistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gamehistory->id)]) ?>
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
