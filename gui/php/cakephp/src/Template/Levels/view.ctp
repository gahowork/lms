<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Level'), ['action' => 'edit', $level->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Level'), ['action' => 'delete', $level->id], ['confirm' => __('Are you sure you want to delete # {0}?', $level->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Pictures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questionlevels'), ['controller' => 'Questionlevels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionlevel'), ['controller' => 'Questionlevels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="levels view large-9 medium-8 columns content">
    <h3><?= h($level->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($level->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Picture') ?></th>
            <td><?= $level->has('picture') ? $this->Html->link($level->picture->id, ['controller' => 'Pictures', 'action' => 'view', $level->picture->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($level->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Levelpoints') ?></th>
            <td><?= $this->Number->format($level->levelpoints) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Leveltarget') ?></th>
            <td><?= $this->Number->format($level->leveltarget) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($level->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Questionlevels') ?></h4>
        <?php if (!empty($level->questionlevels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Level Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($level->questionlevels as $questionlevels): ?>
            <tr>
                <td><?= h($questionlevels->id) ?></td>
                <td><?= h($questionlevels->created) ?></td>
                <td><?= h($questionlevels->question_id) ?></td>
                <td><?= h($questionlevels->level_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questionlevels', 'action' => 'view', $questionlevels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questionlevels', 'action' => 'edit', $questionlevels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questionlevels', 'action' => 'delete', $questionlevels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionlevels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
