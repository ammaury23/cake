<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DeptManager $deptManager
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dept Manager'), ['action' => 'edit', $deptManager->emp_no]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dept Manager'), ['action' => 'delete', $deptManager->emp_no], ['confirm' => __('Are you sure you want to delete # {0}?', $deptManager->emp_no)]) ?> </li>
        <li><?= $this->Html->link(__('List Dept Manager'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dept Manager'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deptManager view large-9 medium-8 columns content">
    <h3><?= h($deptManager->emp_no) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dept No') ?></th>
            <td><?= h($deptManager->dept_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emp No') ?></th>
            <td><?= $this->Number->format($deptManager->emp_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('From Date') ?></th>
            <td><?= h($deptManager->from_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('To Date') ?></th>
            <td><?= h($deptManager->to_date) ?></td>
        </tr>
    </table>
</div>
