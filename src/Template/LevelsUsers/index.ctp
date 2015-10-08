<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Levels User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="levelsUsers index large-9 medium-8 columns content">
    <h3><?= __('Levels Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('level_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('start') ?></th>
                <th><?= $this->Paginator->sort('end') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($levelsUsers as $levelsUser): ?>
            <tr>
                <td><?= $this->Number->format($levelsUser->id) ?></td>
                <td><?= $levelsUser->has('level') ? $this->Html->link($levelsUser->level->name, ['controller' => 'Levels', 'action' => 'view', $levelsUser->level->id]) : '' ?></td>
                <td><?= $levelsUser->has('user') ? $this->Html->link($levelsUser->user->name, ['controller' => 'Users', 'action' => 'view', $levelsUser->user->id]) : '' ?></td>
                <td><?= h($levelsUser->start) ?></td>
                <td><?= h($levelsUser->end) ?></td>
                <td><?= h($levelsUser->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $levelsUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $levelsUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $levelsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $levelsUser->id)]) ?>
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
