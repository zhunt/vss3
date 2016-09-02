<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $amenity->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $amenity->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Amenities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="amenities form large-9 medium-8 columns content">
    <?= $this->Form->create($amenity) ?>
    <fieldset>
        <legend><?= __('Edit Amenity') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('flag_all');
            echo $this->Form->input('flag_bar');
            echo $this->Form->input('flag_restaurant');
            echo $this->Form->input('flag_hotel');
            echo $this->Form->input('flag_store');
            echo $this->Form->input('flag_mall');
            echo $this->Form->input('venues._ids', ['options' => $venues]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
