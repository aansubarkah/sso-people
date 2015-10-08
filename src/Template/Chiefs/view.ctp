<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Chief'), ['action' => 'edit', $chief->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Chief'), ['action' => 'delete', $chief->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chief->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Chiefs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chief'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departements'), ['controller' => 'Departements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departement'), ['controller' => 'Departements', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chiefs view large-9 medium-8 columns content">
    <h3><?= h($chief->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $chief->has('user') ? $this->Html->link($chief->user->name, ['controller' => 'Users', 'action' => 'view', $chief->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($chief->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $chief->active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Departements') ?></h4>
        <?php if (!empty($chief->departements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('Lft') ?></th>
                <th><?= __('Rght') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($chief->departements as $departements): ?>
            <tr>
                <td><?= h($departements->id) ?></td>
                <td><?= h($departements->name) ?></td>
                <td><?= h($departements->parent_id) ?></td>
                <td><?= h($departements->lft) ?></td>
                <td><?= h($departements->rght) ?></td>
                <td><?= h($departements->description) ?></td>
                <td><?= h($departements->address) ?></td>
                <td><?= h($departements->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departements', 'action' => 'view', $departements->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departements', 'action' => 'edit', $departements->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departements', 'action' => 'delete', $departements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departements->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
