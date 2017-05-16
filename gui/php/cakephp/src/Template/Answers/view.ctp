<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Answer'), ['action' => 'edit', $answer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Answer'), ['action' => 'delete', $answer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Answerpictures'), ['controller' => 'Answerpictures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answerpicture'), ['controller' => 'Answerpictures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questionanswers'), ['controller' => 'Questionanswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionanswer'), ['controller' => 'Questionanswers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="answers view large-9 medium-8 columns content">
    <h3><?= h($answer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($answer->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($answer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($answer->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Answerpictures') ?></h4>
        <?php if (!empty($answer->answerpictures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Answer Id') ?></th>
                <th scope="col"><?= __('Picture Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($answer->answerpictures as $answerpictures): ?>
            <tr>
                <td><?= h($answerpictures->id) ?></td>
                <td><?= h($answerpictures->created) ?></td>
                <td><?= h($answerpictures->answer_id) ?></td>
                <td><?= h($answerpictures->picture_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Answerpictures', 'action' => 'view', $answerpictures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Answerpictures', 'action' => 'edit', $answerpictures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Answerpictures', 'action' => 'delete', $answerpictures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $answerpictures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Questionanswers') ?></h4>
        <?php if (!empty($answer->questionanswers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Answer Id') ?></th>
                <th scope="col"><?= __('Result') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($answer->questionanswers as $questionanswers): ?>
            <tr>
                <td><?= h($questionanswers->id) ?></td>
                <td><?= h($questionanswers->created) ?></td>
                <td><?= h($questionanswers->question_id) ?></td>
                <td><?= h($questionanswers->answer_id) ?></td>
                <td><?= h($questionanswers->result) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questionanswers', 'action' => 'view', $questionanswers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questionanswers', 'action' => 'edit', $questionanswers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questionanswers', 'action' => 'delete', $questionanswers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionanswers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
