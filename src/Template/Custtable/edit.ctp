<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Custtable $custtable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $custtable->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $custtable->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Custtable'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Food'), ['controller' => 'Food', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Food', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="custtable form large-9 medium-8 columns content">
    <?= $this->Form->create($custtable) ?>
    <fieldset>
        <legend><?= __('Edit Custtable') ?></legend>
        <?php
            echo $this->Form->control('food_id', ['options' => $food]);
            echo $this->Form->control('tableNo');
            echo $this->Form->control('qty');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
