<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DeptManager[]|\Cake\Collection\CollectionInterface $deptManager
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dept Manager'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="deptManager index large-9 medium-8 columns content">
    <h3><?= __('Dept Manager') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('emp_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dept_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('from_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($deptManager as $deptManager): ?>
            <tr>
                <td><?= $this->Number->format($deptManager->emp_no) ?></td>
                <td><?= h($deptManager->dept_no) ?></td>
                <td><?= h($deptManager->from_date) ?></td>
                <td><?= h($deptManager->to_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $deptManager->emp_no]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $deptManager->emp_no]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $deptManager->emp_no], ['confirm' => __('Are you sure you want to delete # {0}?', $deptManager->emp_no)]) ?>
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
