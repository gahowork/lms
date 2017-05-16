<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Pictures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Questioncategories'), ['controller' => 'Questioncategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Questioncategory'), ['controller' => 'Questioncategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($category->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Picture') ?></th>
            <td><?= $category->has('picture') ? $this->Html->link($category->picture->id, ['controller' => 'Pictures', 'action' => 'view', $category->picture->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($category->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($category->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Questioncategories') ?></h4>
        <?php if (!empty($category->questioncategories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Question Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($category->questioncategories as $questioncategories): ?>
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
</div>
