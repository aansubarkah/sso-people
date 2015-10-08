<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Chiefs'), ['controller' => 'Chiefs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chief'), ['controller' => 'Chiefs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usercareerviews'), ['controller' => 'Usercareerviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usercareerview'), ['controller' => 'Usercareerviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userdepartementviews'), ['controller' => 'Userdepartementviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userdepartementview'), ['controller' => 'Userdepartementviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usereducationviews'), ['controller' => 'Usereducationviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usereducationview'), ['controller' => 'Usereducationviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userlevelviews'), ['controller' => 'Userlevelviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userlevelview'), ['controller' => 'Userlevelviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userroleviews'), ['controller' => 'Userroleviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userroleview'), ['controller' => 'Userroleviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departements'), ['controller' => 'Departements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departement'), ['controller' => 'Departements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Educations'), ['controller' => 'Educations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Education'), ['controller' => 'Educations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positionlevels'), ['controller' => 'Positionlevels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Positionlevel'), ['controller' => 'Positionlevels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Number') ?></th>
            <td><?= h($user->number) ?></td>
        </tr>
        <tr>
            <th><?= __('Oldnumber') ?></th>
            <td><?= h($user->oldnumber) ?></td>
        </tr>
        <tr>
            <th><?= __('Cardnumber') ?></th>
            <td><?= h($user->cardnumber) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th><?= __('Birthplace') ?></th>
            <td><?= h($user->birthplace) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Birthdate') ?></th>
            <td><?= h($user->birthdate) ?></tr>
        </tr>
        <tr>
            <th><?= __('Sex') ?></th>
            <td><?= $user->sex ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $user->active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Chiefs') ?></h4>
        <?php if (!empty($user->chiefs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->chiefs as $chiefs): ?>
            <tr>
                <td><?= h($chiefs->id) ?></td>
                <td><?= h($chiefs->user_id) ?></td>
                <td><?= h($chiefs->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Chiefs', 'action' => 'view', $chiefs->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Chiefs', 'action' => 'edit', $chiefs->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Chiefs', 'action' => 'delete', $chiefs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chiefs->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usercareerviews') ?></h4>
        <?php if (!empty($user->usercareerviews)): ?>
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
            <?php foreach ($user->usercareerviews as $usercareerviews): ?>
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
        <h4><?= __('Related Userdepartementviews') ?></h4>
        <?php if (!empty($user->userdepartementviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Departement Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Start') ?></th>
                <th><?= __('End') ?></th>
                <th><?= __('Active') ?></th>
                <th><?= __('Departementname') ?></th>
                <th><?= __('Departementdescription') ?></th>
                <th><?= __('Departementactive') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Useractive') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->userdepartementviews as $userdepartementviews): ?>
            <tr>
                <td><?= h($userdepartementviews->id) ?></td>
                <td><?= h($userdepartementviews->departement_id) ?></td>
                <td><?= h($userdepartementviews->user_id) ?></td>
                <td><?= h($userdepartementviews->start) ?></td>
                <td><?= h($userdepartementviews->end) ?></td>
                <td><?= h($userdepartementviews->active) ?></td>
                <td><?= h($userdepartementviews->departementname) ?></td>
                <td><?= h($userdepartementviews->departementdescription) ?></td>
                <td><?= h($userdepartementviews->departementactive) ?></td>
                <td><?= h($userdepartementviews->username) ?></td>
                <td><?= h($userdepartementviews->useractive) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Userdepartementviews', 'action' => 'view', $userdepartementviews->]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Userdepartementviews', 'action' => 'edit', $userdepartementviews->]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Userdepartementviews', 'action' => 'delete', $userdepartementviews->], ['confirm' => __('Are you sure you want to delete # {0}?', $userdepartementviews->)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usereducationviews') ?></h4>
        <?php if (!empty($user->usereducationviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Date') ?></th>
                <th><?= __('Education Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Active') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Usernumber') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Useractive') ?></th>
                <th><?= __('Educationname') ?></th>
                <th><?= __('Educationdescription') ?></th>
                <th><?= __('Educationactive') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->usereducationviews as $usereducationviews): ?>
            <tr>
                <td><?= h($usereducationviews->id) ?></td>
                <td><?= h($usereducationviews->date) ?></td>
                <td><?= h($usereducationviews->education_id) ?></td>
                <td><?= h($usereducationviews->user_id) ?></td>
                <td><?= h($usereducationviews->active) ?></td>
                <td><?= h($usereducationviews->created) ?></td>
                <td><?= h($usereducationviews->modified) ?></td>
                <td><?= h($usereducationviews->usernumber) ?></td>
                <td><?= h($usereducationviews->username) ?></td>
                <td><?= h($usereducationviews->useractive) ?></td>
                <td><?= h($usereducationviews->educationname) ?></td>
                <td><?= h($usereducationviews->educationdescription) ?></td>
                <td><?= h($usereducationviews->educationactive) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usereducationviews', 'action' => 'view', $usereducationviews->]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usereducationviews', 'action' => 'edit', $usereducationviews->]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usereducationviews', 'action' => 'delete', $usereducationviews->], ['confirm' => __('Are you sure you want to delete # {0}?', $usereducationviews->)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Userlevelviews') ?></h4>
        <?php if (!empty($user->userlevelviews)): ?>
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
            <?php foreach ($user->userlevelviews as $userlevelviews): ?>
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
        <h4><?= __('Related Userroleviews') ?></h4>
        <?php if (!empty($user->userroleviews)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Role Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Start') ?></th>
                <th><?= __('End') ?></th>
                <th><?= __('Active') ?></th>
                <th><?= __('Rolename') ?></th>
                <th><?= __('Roledescription') ?></th>
                <th><?= __('Roleactive') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Useractive') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->userroleviews as $userroleviews): ?>
            <tr>
                <td><?= h($userroleviews->id) ?></td>
                <td><?= h($userroleviews->role_id) ?></td>
                <td><?= h($userroleviews->user_id) ?></td>
                <td><?= h($userroleviews->start) ?></td>
                <td><?= h($userroleviews->end) ?></td>
                <td><?= h($userroleviews->active) ?></td>
                <td><?= h($userroleviews->rolename) ?></td>
                <td><?= h($userroleviews->roledescription) ?></td>
                <td><?= h($userroleviews->roleactive) ?></td>
                <td><?= h($userroleviews->username) ?></td>
                <td><?= h($userroleviews->useractive) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Userroleviews', 'action' => 'view', $userroleviews->]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Userroleviews', 'action' => 'edit', $userroleviews->]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Userroleviews', 'action' => 'delete', $userroleviews->], ['confirm' => __('Are you sure you want to delete # {0}?', $userroleviews->)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Departements') ?></h4>
        <?php if (!empty($user->departements)): ?>
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
            <?php foreach ($user->departements as $departements): ?>
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
    <div class="related">
        <h4><?= __('Related Educations') ?></h4>
        <?php if (!empty($user->educations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->educations as $educations): ?>
            <tr>
                <td><?= h($educations->id) ?></td>
                <td><?= h($educations->name) ?></td>
                <td><?= h($educations->description) ?></td>
                <td><?= h($educations->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Educations', 'action' => 'view', $educations->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Educations', 'action' => 'edit', $educations->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Educations', 'action' => 'delete', $educations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $educations->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Levels') ?></h4>
        <?php if (!empty($user->levels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Positionlevel Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->levels as $levels): ?>
            <tr>
                <td><?= h($levels->id) ?></td>
                <td><?= h($levels->positionlevel_id) ?></td>
                <td><?= h($levels->name) ?></td>
                <td><?= h($levels->description) ?></td>
                <td><?= h($levels->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Levels', 'action' => 'view', $levels->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Levels', 'action' => 'edit', $levels->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Levels', 'action' => 'delete', $levels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $levels->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Roles') ?></h4>
        <?php if (!empty($user->roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->roles as $roles): ?>
            <tr>
                <td><?= h($roles->id) ?></td>
                <td><?= h($roles->name) ?></td>
                <td><?= h($roles->description) ?></td>
                <td><?= h($roles->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Roles', 'action' => 'view', $roles->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Roles', 'action' => 'edit', $roles->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roles', 'action' => 'delete', $roles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roles->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Positionlevels') ?></h4>
        <?php if (!empty($user->positionlevels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Position Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->positionlevels as $positionlevels): ?>
            <tr>
                <td><?= h($positionlevels->id) ?></td>
                <td><?= h($positionlevels->position_id) ?></td>
                <td><?= h($positionlevels->name) ?></td>
                <td><?= h($positionlevels->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Positionlevels', 'action' => 'view', $positionlevels->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Positionlevels', 'action' => 'edit', $positionlevels->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Positionlevels', 'action' => 'delete', $positionlevels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positionlevels->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Positions') ?></h4>
        <?php if (!empty($user->positions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->positions as $positions): ?>
            <tr>
                <td><?= h($positions->id) ?></td>
                <td><?= h($positions->name) ?></td>
                <td><?= h($positions->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Positions', 'action' => 'view', $positions->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Positions', 'action' => 'edit', $positions->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Positions', 'action' => 'delete', $positions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positions->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
