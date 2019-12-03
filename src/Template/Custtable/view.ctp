<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Custtable $custtable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Custtable'), ['action' => 'edit', $custtable->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Custtable'), ['action' => 'delete', $custtable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $custtable->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Custtable'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Custtable'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Food'), ['controller' => 'Food', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Food', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="custtable view large-9 medium-8 columns content">
    <h3><?= h($custtable->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Food') ?></th>
            <td><?= $custtable->has('food') ? $this->Html->link($custtable->food->name, ['controller' => 'Food', 'action' => 'view', $custtable->food->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($custtable->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TableNo') ?></th>
            <td><?= $this->Number->format($custtable->tableNo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qty') ?></th>
            <td><?= $this->Number->format($custtable->qty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($custtable->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($custtable->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($custtable->modified) ?></td>
        </tr>
    </table>
</div>
