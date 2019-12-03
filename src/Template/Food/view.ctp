<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food $food
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Food'), ['action' => 'edit', $food->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Food'), ['action' => 'delete', $food->id], ['confirm' => __('Are you sure you want to delete # {0}?', $food->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Food'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Custtable'), ['controller' => 'Custtable', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Custtable'), ['controller' => 'Custtable', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="food view large-9 medium-8 columns content">
    <h3><?= h($food->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($food->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($food->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($food->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($food->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($food->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Custtable') ?></h4>
        <?php if (!empty($food->custtable)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Food Id') ?></th>
                <th scope="col"><?= __('TableNo') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($food->custtable as $custtable): ?>
            <tr>
                <td><?= h($custtable->id) ?></td>
                <td><?= h($custtable->food_id) ?></td>
                <td><?= h($custtable->tableNo) ?></td>
                <td><?= h($custtable->qty) ?></td>
                <td><?= h($custtable->price) ?></td>
                <td><?= h($custtable->created) ?></td>
                <td><?= h($custtable->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Custtable', 'action' => 'view', $custtable->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Custtable', 'action' => 'edit', $custtable->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Custtable', 'action' => 'delete', $custtable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $custtable->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
