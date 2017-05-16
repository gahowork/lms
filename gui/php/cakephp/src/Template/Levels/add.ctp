<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Pictures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionlevels'), ['controller' => 'Questionlevels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionlevel'), ['controller' => 'Questionlevels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="levels form large-9 medium-8 columns content">
    <?= $this->Form->create($level) ?>
    <fieldset>
        <legend><?= __('Add Level') ?></legend>
        <?php
            echo $this->Form->input('description');
            echo $this->Form->input('picture_id', ['options' => $pictures]);
            echo $this->Form->input('levelpoints');
            echo $this->Form->input('leveltarget');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
