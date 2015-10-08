<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Chiefs Departement'), ['action' => 'edit', $chiefsDepartement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Chiefs Departement'), ['action' => 'delete', $chiefsDepartement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chiefsDepartement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Chiefs Departements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chiefs Departement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departements'), ['controller' => 'Departements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departement'), ['controller' => 'Departements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Chiefs'), ['controller' => 'Chiefs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chief'), ['controller' => 'Chiefs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chiefsDepartements view large-9 medium-8 columns content">
    <h3><?= h($chiefsDepartement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Chief') ?></th>
            <td><?= $chiefsDepartement->has('chief') ? $this->Html->link($chiefsDepartement->chief->id, ['controller' => 'Chiefs', 'action' => 'view', $chiefsDepartement->chief->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Departement') ?></th>
            <td><?= $chiefsDepartement->has('departement') ? $this->Html->link($chiefsDepartement->departement->name, ['controller' => 'Departements', 'action' => 'view', $chiefsDepartement->departement->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($chiefsDepartement->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Start') ?></th>
            <td><?= h($chiefsDepartement->start) ?></tr>
        </tr>
        <tr>
            <th><?= __('End') ?></th>
            <td><?= h($chiefsDepartement->end) ?></tr>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $chiefsDepartement->active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
