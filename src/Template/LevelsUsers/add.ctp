<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Levels Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="levelsUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($levelsUser) ?>
    <fieldset>
        <legend><?= __('Add Levels User') ?></legend>
        <?php
            echo $this->Form->input('level_id', ['options' => $levels]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('start');
            echo $this->Form->input('end', ['empty' => true, 'default' => '']);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
