<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food $food
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Food'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Custtable'), ['controller' => 'Custtable', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Custtable'), ['controller' => 'Custtable', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="food form large-9 medium-8 columns content">
    <?= $this->Form->create($food) ?>
    <fieldset>
        <legend><?= __('Add Food') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
