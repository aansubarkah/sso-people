<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Chiefs Departement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departements'), ['controller' => 'Departements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departement'), ['controller' => 'Departements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Chiefs'), ['controller' => 'Chiefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chief'), ['controller' => 'Chiefs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chiefsDepartements index large-9 medium-8 columns content">
    <h3><?= __('Chiefs Departements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('chief_id') ?></th>
                <th><?= $this->Paginator->sort('departement_id') ?></th>
                <th><?= $this->Paginator->sort('start') ?></th>
                <th><?= $this->Paginator->sort('end') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chiefsDepartements as $chiefsDepartement): ?>
            <tr>
                <td><?= $this->Number->format($chiefsDepartement->id) ?></td>
                <td><?= $chiefsDepartement->has('chief') ? $this->Html->link($chiefsDepartement->chief->id, ['controller' => 'Chiefs', 'action' => 'view', $chiefsDepartement->chief->id]) : '' ?></td>
                <td><?= $chiefsDepartement->has('departement') ? $this->Html->link($chiefsDepartement->departement->name, ['controller' => 'Departements', 'action' => 'view', $chiefsDepartement->departement->id]) : '' ?></td>
                <td><?= h($chiefsDepartement->start) ?></td>
                <td><?= h($chiefsDepartement->end) ?></td>
                <td><?= h($chiefsDepartement->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $chiefsDepartement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chiefsDepartement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chiefsDepartement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chiefsDepartement->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
