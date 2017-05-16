<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Level'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Pictures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionlevels'), ['controller' => 'Questionlevels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionlevel'), ['controller' => 'Questionlevels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="levels index large-9 medium-8 columns content">
    <h3><?= __('Levels') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('picture_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('levelpoints') ?></th>
                <th scope="col"><?= $this->Paginator->sort('leveltarget') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($levels as $level): ?>
            <tr>
                <td><?= $this->Number->format($level->id) ?></td>
                <td><?= h($level->created) ?></td>
                <td><?= h($level->description) ?></td>
                <td><?= $level->has('picture') ? $this->Html->link($level->picture->id, ['controller' => 'Pictures', 'action' => 'view', $level->picture->id]) : '' ?></td>
                <td><?= $this->Number->format($level->levelpoints) ?></td>
                <td><?= $this->Number->format($level->leveltarget) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $level->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $level->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $level->id], ['confirm' => __('Are you sure you want to delete # {0}?', $level->id)]) ?>
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
