<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DeptEmp $deptEmp
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dept Emp'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="deptEmp form large-9 medium-8 columns content">
    <?= $this->Form->create($deptEmp) ?>
    <fieldset>
        <legend><?= __('Add Dept Emp') ?></legend>
        <?php
            echo $this->Form->control('from_date');
            echo $this->Form->control('to_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
