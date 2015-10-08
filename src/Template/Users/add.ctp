<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
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
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('number');
            echo $this->Form->input('oldnumber');
            echo $this->Form->input('cardnumber');
            echo $this->Form->input('name');
            echo $this->Form->input('fullname');
            echo $this->Form->input('birthdate', ['empty' => true, 'default' => '']);
            echo $this->Form->input('birthplace');
            echo $this->Form->input('sex');
            echo $this->Form->input('active');
            echo $this->Form->input('departements._ids', ['options' => $departements]);
            echo $this->Form->input('educations._ids', ['options' => $educations]);
            echo $this->Form->input('levels._ids', ['options' => $levels]);
            echo $this->Form->input('roles._ids', ['options' => $roles]);
            echo $this->Form->input('positionlevels._ids', ['options' => $positionlevels]);
            echo $this->Form->input('positions._ids', ['options' => $positions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
