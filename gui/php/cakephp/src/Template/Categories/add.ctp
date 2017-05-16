<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Pictures', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Questioncategories'), ['controller' => 'Questioncategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Questioncategory'), ['controller' => 'Questioncategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Add Category') ?></legend>
        <?php
            echo $this->Form->input('description');
            echo $this->Form->input('picture_id', ['options' => $pictures]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
