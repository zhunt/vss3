<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Venue Photos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="venuePhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($venuePhoto) ?>
    <fieldset>
        <legend><?= __('Add Venue Photo') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('meta_data');
            echo $this->Form->input('venues._ids', ['options' => $venues]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
