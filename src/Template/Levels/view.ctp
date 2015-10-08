<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Level'), ['action' => 'edit', $level->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Level'), ['action' => 'delete', $level->id], ['confirm' => __('Are you sure you want to delete # {0}?', $level->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positionlevels'), ['controller' => 'Positionlevels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Positionlevel'), ['controller' => 'Positionlevels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usercareerviews'), ['controller' => 'Usercareerviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usercareerview'), ['controller' => 'Usercareerviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userlevelviews'), ['controller' => 'Userlevelviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userlevelview'), ['controller' => 'Userlevelviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="levels view large-9 medium-8 columns content">
    <h3><?= h($level->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Positionlevel') ?></th>
            <td><?= $level->has('positionlevel') ? $this->Html->link($level->positionlevel->name, ['controller' => 'Positionlevels', 'action' => 'view', $level->positionlevel->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($level->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($level->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($level->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $level->active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Usercareerviews') ?></h4>
        <?php if (!empty($level->usercareerviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Number') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Active') ?></th>
                <th><?= __('Userlevelid') ?></th>
                <th><?= __('Level Id') ?></th>
                <th><?= __('Levelstart') ?></th>
                <th><?= __('Levelend') ?></th>
                <th><?= __('Levelactive') ?></th>
                <th><?= __('Levelname') ?></th>
                <th><?= __('Leveldescription') ?></th>
                <th><?= __('Positionlevelname') ?></th>
                <th><?= __('Userroleid') ?></th>
                <th><?= __('Role Id') ?></th>
                <th><?= __('Rolestart') ?></th>
                <th><?= __('Roleend') ?></th>
                <th><?= __('Roleactive') ?></th>
                <th><?= __('Rolename') ?></th>
                <th><?= __('Roledescription') ?></th>
                <th><?= __('Userdepartementid') ?></th>
                <th><?= __('Departement Id') ?></th>
                <th><?= __('Departementstart') ?></th>
                <th><?= __('Departementend') ?></th>
                <th><?= __('Departementactive') ?></th>
                <th><?= __('Departementname') ?></th>
                <th><?= __('Departementdescription') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($level->usercareerviews as $usercareerviews): ?>
            <tr>
                <td><?= h($usercareerviews->id) ?></td>
                <td><?= h($usercareerviews->user_id) ?></td>
                <td><?= h($usercareerviews->number) ?></td>
                <td><?= h($usercareerviews->name) ?></td>
                <td><?= h($usercareerviews->active) ?></td>
                <td><?= h($usercareerviews->userlevelid) ?></td>
                <td><?= h($usercareerviews->level_id) ?></td>
                <td><?= h($usercareerviews->levelstart) ?></td>
                <td><?= h($usercareerviews->levelend) ?></td>
                <td><?= h($usercareerviews->levelactive) ?></td>
                <td><?= h($usercareerviews->levelname) ?></td>
                <td><?= h($usercareerviews->leveldescription) ?></td>
                <td><?= h($usercareerviews->positionlevelname) ?></td>
                <td><?= h($usercareerviews->userroleid) ?></td>
                <td><?= h($usercareerviews->role_id) ?></td>
                <td><?= h($usercareerviews->rolestart) ?></td>
                <td><?= h($usercareerviews->roleend) ?></td>
                <td><?= h($usercareerviews->roleactive) ?></td>
                <td><?= h($usercareerviews->rolename) ?></td>
                <td><?= h($usercareerviews->roledescription) ?></td>
                <td><?= h($usercareerviews->userdepartementid) ?></td>
                <td><?= h($usercareerviews->departement_id) ?></td>
                <td><?= h($usercareerviews->departementstart) ?></td>
                <td><?= h($usercareerviews->departementend) ?></td>
                <td><?= h($usercareerviews->departementactive) ?></td>
                <td><?= h($usercareerviews->departementname) ?></td>
                <td><?= h($usercareerviews->departementdescription) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usercareerviews', 'action' => 'view', $usercareerviews->]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usercareerviews', 'action' => 'edit', $usercareerviews->]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usercareerviews', 'action' => 'delete', $usercareerviews->], ['confirm' => __('Are you sure you want to delete # {0}?', $usercareerviews->)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Userlevelviews') ?></h4>
        <?php if (!empty($level->userlevelviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Level Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Start') ?></th>
                <th><?= __('End') ?></th>
                <th><?= __('Active') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Useractive') ?></th>
                <th><?= __('Levelname') ?></th>
                <th><?= __('Leveldescription') ?></th>
                <th><?= __('Levelactive') ?></th>
                <th><?= __('Positionlevelname') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($level->userlevelviews as $userlevelviews): ?>
            <tr>
                <td><?= h($userlevelviews->id) ?></td>
                <td><?= h($userlevelviews->level_id) ?></td>
                <td><?= h($userlevelviews->user_id) ?></td>
                <td><?= h($userlevelviews->start) ?></td>
                <td><?= h($userlevelviews->end) ?></td>
                <td><?= h($userlevelviews->active) ?></td>
                <td><?= h($userlevelviews->name) ?></td>
                <td><?= h($userlevelviews->useractive) ?></td>
                <td><?= h($userlevelviews->levelname) ?></td>
                <td><?= h($userlevelviews->leveldescription) ?></td>
                <td><?= h($userlevelviews->levelactive) ?></td>
                <td><?= h($userlevelviews->positionlevelname) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Userlevelviews', 'action' => 'view', $userlevelviews->]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Userlevelviews', 'action' => 'edit', $userlevelviews->]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Userlevelviews', 'action' => 'delete', $userlevelviews->], ['confirm' => __('Are you sure you want to delete # {0}?', $userlevelviews->)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($level->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Group Id') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Number') ?></th>
                <th><?= __('Oldnumber') ?></th>
                <th><?= __('Cardnumber') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Fullname') ?></th>
                <th><?= __('Birthdate') ?></th>
                <th><?= __('Birthplace') ?></th>
                <th><?= __('Sex') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($level->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->group_id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->number) ?></td>
                <td><?= h($users->oldnumber) ?></td>
                <td><?= h($users->cardnumber) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->fullname) ?></td>
                <td><?= h($users->birthdate) ?></td>
                <td><?= h($users->birthplace) ?></td>
                <td><?= h($users->sex) ?></td>
                <td><?= h($users->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
