<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Page Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Landings'), ['controller' => 'Landings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Landing'), ['controller' => 'Landings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="pageTypes form large-10 medium-9 columns">
    <?= $this->Form->create($pageType); ?>
    <fieldset>
        <legend><?= __('Add Page Type') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
