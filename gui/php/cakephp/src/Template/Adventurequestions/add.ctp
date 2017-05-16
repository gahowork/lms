<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Adventurequestions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Adventures'), ['controller' => 'Adventures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Adventure'), ['controller' => 'Adventures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adventurequestions form large-9 medium-8 columns content">
    <?= $this->Form->create($adventurequestion) ?>
    <fieldset>
        <legend><?= __('Add Adventurequestion') ?></legend>
        <?php
            echo $this->Form->input('adventure_id', ['options' => $adventures]);
            echo $this->Form->input('question_id', ['options' => $questions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
