<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questiontypes'), ['controller' => 'Questiontypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questiontype'), ['controller' => 'Questiontypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Adventurequestions'), ['controller' => 'Adventurequestions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adventurequestion'), ['controller' => 'Adventurequestions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questionanswers'), ['controller' => 'Questionanswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionanswer'), ['controller' => 'Questionanswers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questioncategories'), ['controller' => 'Questioncategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questioncategory'), ['controller' => 'Questioncategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questionlevels'), ['controller' => 'Questionlevels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionlevel'), ['controller' => 'Questionlevels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questionpictures'), ['controller' => 'Questionpictures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionpicture'), ['controller' => 'Questionpictures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Header') ?></th>
            <td><?= h($question->header) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($question->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Questiontype') ?></th>
            <td><?= $question->has('questiontype') ? $this->Html->link($question->questiontype->id, ['controller' => 'Questiontypes', 'action' => 'view', $question->questiontype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($question->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($question->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Adventurequestions') ?></h4>
        <?php if (!empty($question->adventurequestions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Adventure Id') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($question->adventurequestions as $adventurequestions): ?>
            <tr>
                <td><?= h($adventurequestions->id) ?></td>
                <td><?= h($adventurequestions->created) ?></td>
                <td><?= h($adventurequestions->adventure_id) ?></td>
                <td><?= h($adventurequestions->question_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Adventurequestions', 'action' => 'view', $adventurequestions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Adventurequestions', 'action' => 'edit', $adventurequestions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Adventurequestions', 'action' => 'delete', $adventurequestions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adventurequestions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Questionanswers') ?></h4>
        <?php if (!empty($question->questionanswers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Answer Id') ?></th>
                <th scope="col"><?= __('Result') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($question->questionanswers as $questionanswers): ?>
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
    <div class="related">
        <h4><?= __('Related Questioncategories') ?></h4>
        <?php if (!empty($question->questioncategories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($question->questioncategories as $questioncategories): ?>
            <tr>
                <td><?= h($questioncategories->id) ?></td>
                <td><?= h($questioncategories->created) ?></td>
                <td><?= h($questioncategories->question_id) ?></td>
                <td><?= h($questioncategories->category_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questioncategories', 'action' => 'view', $questioncategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questioncategories', 'action' => 'edit', $questioncategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questioncategories', 'action' => 'delete', $questioncategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questioncategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Questionlevels') ?></h4>
        <?php if (!empty($question->questionlevels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Level Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($question->questionlevels as $questionlevels): ?>
            <tr>
                <td><?= h($questionlevels->id) ?></td>
                <td><?= h($questionlevels->created) ?></td>
                <td><?= h($questionlevels->question_id) ?></td>
                <td><?= h($questionlevels->level_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questionlevels', 'action' => 'view', $questionlevels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questionlevels', 'action' => 'edit', $questionlevels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questionlevels', 'action' => 'delete', $questionlevels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionlevels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Questionpictures') ?></h4>
        <?php if (!empty($question->questionpictures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Picture Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($question->questionpictures as $questionpictures): ?>
            <tr>
                <td><?= h($questionpictures->id) ?></td>
                <td><?= h($questionpictures->created) ?></td>
                <td><?= h($questionpictures->question_id) ?></td>
                <td><?= h($questionpictures->picture_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Questionpictures', 'action' => 'view', $questionpictures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Questionpictures', 'action' => 'edit', $questionpictures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questionpictures', 'action' => 'delete', $questionpictures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionpictures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
