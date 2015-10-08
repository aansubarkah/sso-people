<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $educationsUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $educationsUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Educations Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Educations'), ['controller' => 'Educations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Education'), ['controller' => 'Educations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="educationsUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($educationsUser) ?>
    <fieldset>
        <legend><?= __('Edit Educations User') ?></legend>
        <?php
            echo $this->Form->input('date');
            echo $this->Form->input('education_id', ['options' => $educations]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
