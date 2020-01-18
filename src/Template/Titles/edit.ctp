<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Title $title
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $title->emp_no],
                ['confirm' => __('Are you sure you want to delete # {0}?', $title->emp_no)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Titles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="titles form large-9 medium-8 columns content">
    <?= $this->Form->create($title) ?>
    <fieldset>
        <legend><?= __('Edit Title') ?></legend>
        <?php
            echo $this->Form->control('emp_no', ['label'=> 'No. Empleado,', 'type' =>'number']);
            echo $this->Form->control('title',['label'=>'Titulo', 'type' => 'text']);
            echo $this->Form->control('from_date', [
                'label' =>'Fecha inicio',
                'type' =>'date',
                'empty' =>true,
                'minYear' => date('Y') - 50,
                'maxYear' => date('Y') + 50,
                'monthNames' => false
                ]);
            echo $this->Form->control('to_date', [
                'label' =>'Fecha fin',
                'empty' =>true,
                'minYear' => date('Y') - 50,
                'maxYear' => date('Y') + 50,
                'monthNames' => false
                ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
