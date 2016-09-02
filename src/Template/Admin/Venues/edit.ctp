<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $venue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $venue->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Neighbourhoods'), ['controller' => 'Neighbourhoods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Neighbourhood'), ['controller' => 'Neighbourhoods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Establishment Types'), ['controller' => 'EstablishmentTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Establishment Type'), ['controller' => 'EstablishmentTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Inside Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Inside Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Amenities'), ['controller' => 'Amenities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Amenity'), ['controller' => 'Amenities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cuisines'), ['controller' => 'Cuisines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cuisine'), ['controller' => 'Cuisines', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Features'), ['controller' => 'Features', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Features', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Venue Photos'), ['controller' => 'VenuePhotos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue Photo'), ['controller' => 'VenuePhotos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="venues form large-9 medium-8 columns content">
    <?= $this->Form->create($venue) ?>
    <fieldset>
        <legend><?= __('Edit Venue') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('slug');
            echo $this->Form->input('seo_title');
            echo $this->Form->input('seo_desc');
            echo $this->Form->input('page_url');
            echo $this->Form->input('description');
            echo $this->Form->input('province_id', ['options' => $provinces, 'empty' => true]);
            echo $this->Form->input('country_id', ['options' => $countries, 'empty' => true]);
            echo $this->Form->input('city_id', ['options' => $cities, 'empty' => true]);
            echo $this->Form->input('geo_cords');
            echo $this->Form->input('neighbourhood_id', ['options' => $neighbourhoods, 'empty' => true]);
            echo $this->Form->input('establishment_type_id', ['options' => $establishmentTypes]);
            echo $this->Form->input('flag_mall');
            echo $this->Form->input('flag_closed');
            echo $this->Form->input('flag_published');
            echo $this->Form->input('inside_venue_id');
            echo $this->Form->input('phone_1');
            echo $this->Form->input('phone_2');
            echo $this->Form->input('website_url');
            echo $this->Form->input('address');
            echo $this->Form->input('hours_sun');
            echo $this->Form->input('hours_mon');
            echo $this->Form->input('hours_tue');
            echo $this->Form->input('hours_wed');
            echo $this->Form->input('hours_thu');
            echo $this->Form->input('hours_fri');
            echo $this->Form->input('hours_sat');
            echo $this->Form->input('hours_holidays');
            echo $this->Form->input('user_rating');
            echo $this->Form->input('user_votes');
            echo $this->Form->input('amenities._ids', ['options' => $amenities]);
            echo $this->Form->input('cuisines._ids', ['options' => $cuisines]);
            echo $this->Form->input('features._ids', ['options' => $features]);
            echo $this->Form->input('venue_photos._ids', ['options' => $venuePhotos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
