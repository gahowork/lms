<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Picture'), ['action' => 'edit', $picture->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Picture'), ['action' => 'delete', $picture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $picture->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pictures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Answerpictures'), ['controller' => 'Answerpictures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Answerpicture'), ['controller' => 'Answerpictures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questionpictures'), ['controller' => 'Questionpictures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questionpicture'), ['controller' => 'Questionpictures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pictures view large-9 medium-8 columns content">
    <h3><?= h($picture->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($picture->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($picture->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($picture->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Answerpictures') ?></h4>
        <?php if (!empty($picture->answerpictures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Answer Id') ?></th>
                <th scope="col"><?= __('Picture Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($picture->answerpictures as $answerpictures): ?>
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
        <h4><?= __('Related Categories') ?></h4>
        <?php if (!empty($picture->categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Picture Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($picture->categories as $categories): ?>
            <tr>
                <td><?= h($categories->id) ?></td>
                <td><?= h($categories->created) ?></td>
                <td><?= h($categories->description) ?></td>
                <td><?= h($categories->picture_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Levels') ?></h4>
        <?php if (!empty($picture->levels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Picture Id') ?></th>
                <th scope="col"><?= __('Levelpoints') ?></th>
                <th scope="col"><?= __('Leveltarget') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($picture->levels as $levels): ?>
            <tr>
                <td><?= h($levels->id) ?></td>
                <td><?= h($levels->created) ?></td>
                <td><?= h($levels->description) ?></td>
                <td><?= h($levels->picture_id) ?></td>
                <td><?= h($levels->levelpoints) ?></td>
                <td><?= h($levels->leveltarget) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Levels', 'action' => 'view', $levels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Levels', 'action' => 'edit', $levels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Levels', 'action' => 'delete', $levels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $levels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Questionpictures') ?></h4>
        <?php if (!empty($picture->questionpictures)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Picture Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($picture->questionpictures as $questionpictures): ?>
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
