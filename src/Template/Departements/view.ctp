<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departement'), ['action' => 'edit', $departement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departement'), ['action' => 'delete', $departement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Departements'), ['controller' => 'Departements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Departement'), ['controller' => 'Departements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usercareerviews'), ['controller' => 'Usercareerviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usercareerview'), ['controller' => 'Usercareerviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userdepartementviews'), ['controller' => 'Userdepartementviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userdepartementview'), ['controller' => 'Userdepartementviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Chiefs'), ['controller' => 'Chiefs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chief'), ['controller' => 'Chiefs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departements view large-9 medium-8 columns content">
    <h3><?= h($departement->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($departement->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Parent Departement') ?></th>
            <td><?= $departement->has('parent_departement') ? $this->Html->link($departement->parent_departement->name, ['controller' => 'Departements', 'action' => 'view', $departement->parent_departement->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($departement->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($departement->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($departement->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lft') ?></th>
            <td><?= $this->Number->format($departement->lft) ?></td>
        </tr>
        <tr>
            <th><?= __('Rght') ?></th>
            <td><?= $this->Number->format($departement->rght) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $departement->active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Departements') ?></h4>
        <?php if (!empty($departement->child_departements)): ?>
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
            <?php foreach ($departement->child_departements as $childDepartements): ?>
            <tr>
                <td><?= h($childDepartements->id) ?></td>
                <td><?= h($childDepartements->name) ?></td>
                <td><?= h($childDepartements->parent_id) ?></td>
                <td><?= h($childDepartements->lft) ?></td>
                <td><?= h($childDepartements->rght) ?></td>
                <td><?= h($childDepartements->description) ?></td>
                <td><?= h($childDepartements->address) ?></td>
                <td><?= h($childDepartements->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Departements', 'action' => 'view', $childDepartements->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Departements', 'action' => 'edit', $childDepartements->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departements', 'action' => 'delete', $childDepartements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childDepartements->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usercareerviews') ?></h4>
        <?php if (!empty($departement->usercareerviews)): ?>
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
            <?php foreach ($departement->usercareerviews as $usercareerviews): ?>
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
        <?php if (!empty($departement->userdepartementviews)): ?>
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
            <?php foreach ($departement->userdepartementviews as $userdepartementviews): ?>
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
        <h4><?= __('Related Chiefs') ?></h4>
        <?php if (!empty($departement->chiefs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Active') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($departement->chiefs as $chiefs): ?>
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
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($departement->users)): ?>
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
            <?php foreach ($departement->users as $users): ?>
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
