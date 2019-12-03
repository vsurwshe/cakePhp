<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Custtable[]|\Cake\Collection\CollectionInterface $custtable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Custtable'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Food'), ['controller' => 'Food', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Food', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="custtable index large-9 medium-8 columns content">
    <h3><?= __('Custtable') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('food_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tableNo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($custtable as $custtable): ?>
            <tr>
                <td><?= $this->Number->format($custtable->id) ?></td>
                <td><?= $custtable->has('food') ? $this->Html->link($custtable->food->name, ['controller' => 'Food', 'action' => 'view', $custtable->food->id]) : '' ?></td>
                <td><?= $this->Number->format($custtable->tableNo) ?></td>
                <td><?= $this->Number->format($custtable->qty) ?></td>
                <td><?= $this->Number->format($custtable->price) ?></td>
                <td><?= h($custtable->created) ?></td>
                <td><?= h($custtable->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $custtable->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $custtable->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $custtable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $custtable->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
