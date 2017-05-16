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
                ['action' => 'delete', $answerpicture->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $answerpicture->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Answerpictures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Pictures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="answerpictures form large-9 medium-8 columns content">
    <?= $this->Form->create($answerpicture) ?>
    <fieldset>
        <legend><?= __('Edit Answerpicture') ?></legend>
        <?php
            echo $this->Form->input('answer_id', ['options' => $answers]);
            echo $this->Form->input('picture_id', ['options' => $pictures]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
