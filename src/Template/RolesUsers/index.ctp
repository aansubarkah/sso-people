<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Roles User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rolesUsers index large-9 medium-8 columns content">
    <h3><?= __('Roles Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('role_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('start') ?></th>
                <th><?= $this->Paginator->sort('end') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rolesUsers as $rolesUser): ?>
            <tr>
                <td><?= $this->Number->format($rolesUser->id) ?></td>
                <td><?= $rolesUser->has('role') ? $this->Html->link($rolesUser->role->name, ['controller' => 'Roles', 'action' => 'view', $rolesUser->role->id]) : '' ?></td>
                <td><?= $rolesUser->has('user') ? $this->Html->link($rolesUser->user->name, ['controller' => 'Users', 'action' => 'view', $rolesUser->user->id]) : '' ?></td>
                <td><?= h($rolesUser->start) ?></td>
                <td><?= h($rolesUser->end) ?></td>
                <td><?= h($rolesUser->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rolesUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rolesUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rolesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rolesUser->id)]) ?>
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
