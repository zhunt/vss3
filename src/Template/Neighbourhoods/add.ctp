<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Neighbourhoods'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="neighbourhoods form large-9 medium-8 columns content">
    <?= $this->Form->create($neighbourhood) ?>
    <fieldset>
        <legend><?= __('Add Neighbourhood') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('slug');
            echo $this->Form->input('page_url');
            echo $this->Form->input('google_administrative_area_level_1');
            echo $this->Form->input('google_administrative_area_level_2');
            echo $this->Form->input('description');
            echo $this->Form->input('seo_title');
            echo $this->Form->input('city_id', ['options' => $cities]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
