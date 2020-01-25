<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DeptManager $deptManager
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dept Manager'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="deptManager form large-9 medium-8 columns content">
    <?= $this->Form->create($deptManager) ?>
    <fieldset>
        <legend><?= __('Add Dept Manager') ?></legend>
        <?php
            echo $this->Form->control('from_date');
            echo $this->Form->control('to_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
