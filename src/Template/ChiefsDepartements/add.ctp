<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Chiefs Departements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departements'), ['controller' => 'Departements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departement'), ['controller' => 'Departements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Chiefs'), ['controller' => 'Chiefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chief'), ['controller' => 'Chiefs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chiefsDepartements form large-9 medium-8 columns content">
    <?= $this->Form->create($chiefsDepartement) ?>
    <fieldset>
        <legend><?= __('Add Chiefs Departement') ?></legend>
        <?php
            echo $this->Form->input('chief_id', ['options' => $chiefs]);
            echo $this->Form->input('departement_id', ['options' => $departements]);
            echo $this->Form->input('start');
            echo $this->Form->input('end', ['empty' => true, 'default' => '']);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
