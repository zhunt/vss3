<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $city->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Neighbourhoods'), ['controller' => 'Neighbourhoods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Neighbourhood'), ['controller' => 'Neighbourhoods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cities form large-9 medium-8 columns content">
    <?= $this->Form->create($city) ?>
    <fieldset>
        <legend><?= __('Edit City') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('slug');
            echo $this->Form->input('page_url');
            echo $this->Form->input('google_locality');
            echo $this->Form->input('description');
            echo $this->Form->input('seo_title');
            echo $this->Form->input('image_id', ['options' => $images]);
            echo $this->Form->input('geo_cords');
            echo $this->Form->input('province_id', ['options' => $provinces]);
            echo $this->Form->input('country_id', ['options' => $countries]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
