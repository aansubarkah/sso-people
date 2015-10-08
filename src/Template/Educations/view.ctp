<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Education'), ['action' => 'edit', $education->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Education'), ['action' => 'delete', $education->id], ['confirm' => __('Are you sure you want to delete # {0}?', $education->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Educations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Education'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usereducationviews'), ['controller' => 'Usereducationviews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usereducationview'), ['controller' => 'Usereducationviews', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="educations view large-9 medium-8 columns content">
    <h3><?= h($education->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($education->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($education->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($education->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= $education->active ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Usereducationviews') ?></h4>
        <?php if (!empty($education->usereducationviews)): ?>
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
            <?php foreach ($education->usereducationviews as $usereducationviews): ?>
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
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($education->users)): ?>
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
            <?php foreach ($education->users as $users): ?>
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
