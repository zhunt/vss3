<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $venuePhoto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $venuePhoto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Venue Photos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="venuePhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($venuePhoto) ?>
    <fieldset>
        <legend><?= __('Edit Venue Photo') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('meta_data');
            echo $this->Form->input('venues._ids', ['options' => $venues]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
