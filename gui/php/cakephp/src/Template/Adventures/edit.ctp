<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adventure->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adventure->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Adventures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Adventurequestions'), ['controller' => 'Adventurequestions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Adventurequestion'), ['controller' => 'Adventurequestions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adventures form large-9 medium-8 columns content">
    <?= $this->Form->create($adventure) ?>
    <fieldset>
        <legend><?= __('Edit Adventure') ?></legend>
        <?php
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
