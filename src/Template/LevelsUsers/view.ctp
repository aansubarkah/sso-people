<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Levels User'), ['action' => 'edit', $levelsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Levels User'), ['action' => 'delete', $levelsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $levelsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Levels Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Levels User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="levelsUsers view large-9 medium-8 columns content">
    <h3><?= h($levelsUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Level') ?></th>
            <td><?= $levelsUser->has('level') ? $this->Html->link($levelsUser->level->name, ['controller' => 'Levels', 'action' => 'view', $levelsUser->level->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $levelsUser->has('user') ? $this->Html->link($levelsUser->user->name, ['controller' => 'Users', 'action' => 'view', $levelsUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($levelsUser->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Start') ?></th>
            <td><?= h($levelsUser->start) ?></tr>
        </tr>
        <tr>
            <th><?= __('End') ?></th>
            <td><?= h($levelsUser->end) ?></tr>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $levelsUser->active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
