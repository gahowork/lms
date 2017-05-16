<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Answers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Answerpictures'), ['controller' => 'Answerpictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Answerpicture'), ['controller' => 'Answerpictures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionanswers'), ['controller' => 'Questionanswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionanswer'), ['controller' => 'Questionanswers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="answers form large-9 medium-8 columns content">
    <?= $this->Form->create($answer) ?>
    <fieldset>
        <legend><?= __('Add Answer') ?></legend>
        <?php
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
