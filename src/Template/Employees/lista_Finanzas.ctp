<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Empleados Finanzas'), ['action' => 'listaFinanzas']) ?></li>
    </ul>
</nav>
<div class="employees index large-9 medium-8 columns content">
    <h3><?= __('Employees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('emp_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Salario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Codigo de departamento') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaEmp as $consulta): ?>
            <tr>
                <td><?= $this->Number->format($consulta->emp_no) ?></td>
                <td><?= h($consulta->first_name) ?></td>
                <td><?= h($consulta->last_name) ?></td>
                <td><?= h($consulta->Salaries['salary']) ?></td>
                <td><?= h($consulta->dept_emp['dept_no']) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consulta->emp_no]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consulta->emp_no]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consulta->emp_no], ['confirm' => __('Are you sure you want to delete # {0}?', $consulta->emp_no)]) ?>
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