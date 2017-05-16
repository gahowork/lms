<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Questiontypes'), ['controller' => 'Questiontypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questiontype'), ['controller' => 'Questiontypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Adventurequestions'), ['controller' => 'Adventurequestions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Adventurequestion'), ['controller' => 'Adventurequestions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionanswers'), ['controller' => 'Questionanswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionanswer'), ['controller' => 'Questionanswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questioncategories'), ['controller' => 'Questioncategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questioncategory'), ['controller' => 'Questioncategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionlevels'), ['controller' => 'Questionlevels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionlevel'), ['controller' => 'Questionlevels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionpictures'), ['controller' => 'Questionpictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionpicture'), ['controller' => 'Questionpictures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Add Question') ?></legend>
        <?php
            echo $this->Form->input('header');
            echo $this->Form->input('description');
            echo $this->Form->input('questiontype_id', ['options' => $questiontypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
