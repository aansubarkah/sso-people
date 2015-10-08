<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Chiefs'), ['controller' => 'Chiefs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chief'), ['controller' => 'Chiefs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usercareerviews'), ['controller' => 'Usercareerviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usercareerview'), ['controller' => 'Usercareerviews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userdepartementviews'), ['controller' => 'Userdepartementviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userdepartementview'), ['controller' => 'Userdepartementviews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usereducationviews'), ['controller' => 'Usereducationviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usereducationview'), ['controller' => 'Usereducationviews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userlevelviews'), ['controller' => 'Userlevelviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userlevelview'), ['controller' => 'Userlevelviews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userroleviews'), ['controller' => 'Userroleviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userroleview'), ['controller' => 'Userroleviews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departements'), ['controller' => 'Departements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Departement'), ['controller' => 'Departements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Educations'), ['controller' => 'Educations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Education'), ['controller' => 'Educations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positionlevels'), ['controller' => 'Positionlevels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Positionlevel'), ['controller' => 'Positionlevels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('number') ?></th>
                <th><?= $this->Paginator->sort('oldnumber') ?></th>
                <th><?= $this->Paginator->sort('cardnumber') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->number) ?></td>
                <td><?= h($user->oldnumber) ?></td>
                <td><?= h($user->cardnumber) ?></td>
                <td><?= h($user->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
