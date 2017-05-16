<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gamehistories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionanswers'), ['controller' => 'Questionanswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionanswer'), ['controller' => 'Questionanswers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gamehistories form large-9 medium-8 columns content">
    <?= $this->Form->create($gamehistory) ?>
    <fieldset>
        <legend><?= __('Add Gamehistory') ?></legend>
        <?php
            echo $this->Form->input('game_id', ['options' => $games]);
            echo $this->Form->input('questionanswers_id', ['options' => $questionanswers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
