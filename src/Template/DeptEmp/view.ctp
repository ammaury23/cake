<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DeptEmp $deptEmp
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dept Emp'), ['action' => 'edit', $deptEmp->emp_no]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dept Emp'), ['action' => 'delete', $deptEmp->emp_no], ['confirm' => __('Are you sure you want to delete # {0}?', $deptEmp->emp_no)]) ?> </li>
        <li><?= $this->Html->link(__('List Dept Emp'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dept Emp'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deptEmp view large-9 medium-8 columns content">
    <h3><?= h($deptEmp->emp_no) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dept No') ?></th>
            <td><?= h($deptEmp->dept_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emp No') ?></th>
            <td><?= $this->Number->format($deptEmp->emp_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('From Date') ?></th>
            <td><?= h($deptEmp->from_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('To Date') ?></th>
            <td><?= h($deptEmp->to_date) ?></td>
        </tr>
    </table>
</div>
