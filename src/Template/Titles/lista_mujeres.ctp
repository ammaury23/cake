<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Title'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Inicio'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="titles index large-9 medium-8 columns content">
    <h3><?= __('Titles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('emp_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('from_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($titulosMujeres as $title): ?>
            <tr>
                <td><?= $this->Html->link($this->Number->format($title->emp_no), ['controller'=> 'employees', 'action' => 'view', $title->emp_no]) ?></td>
                <td><?= h($title->title) ?></td>
                <td><?= h($title->from_date) ?></td>
                <td><?= h($title->to_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $title->emp_no,$title->title,$title->from_date->format('Y-m-d')]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $title->emp_no,$title->title,$title->from_date->format('Y-m-d')]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $title->emp_no,$title->title,$title->from_date->format('Y-m-d')]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table> 
    <?php echo $this->element('Paginador'); ?>
    </div>
</div>