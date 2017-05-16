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
                ['action' => 'delete', $picture->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $picture->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pictures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Answerpictures'), ['controller' => 'Answerpictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Answerpicture'), ['controller' => 'Answerpictures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questionpictures'), ['controller' => 'Questionpictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questionpicture'), ['controller' => 'Questionpictures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pictures form large-9 medium-8 columns content">
    <?= $this->Form->create($picture) ?>
    <fieldset>
        <legend><?= __('Edit Picture') ?></legend>
        <?php
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
