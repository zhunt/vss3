<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Venue'), ['action' => 'edit', $venue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Venue'), ['action' => 'delete', $venue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Venues'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venue'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Neighbourhoods'), ['controller' => 'Neighbourhoods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Neighbourhood'), ['controller' => 'Neighbourhoods', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Establishment Types'), ['controller' => 'EstablishmentTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Establishment Type'), ['controller' => 'EstablishmentTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Inside Venues'), ['controller' => 'Venues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inside Venue'), ['controller' => 'Venues', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Amenities'), ['controller' => 'Amenities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amenity'), ['controller' => 'Amenities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cuisines'), ['controller' => 'Cuisines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cuisine'), ['controller' => 'Cuisines', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Features'), ['controller' => 'Features', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Features', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Venue Photos'), ['controller' => 'VenuePhotos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venue Photo'), ['controller' => 'VenuePhotos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="venues view large-9 medium-8 columns content">
    <h3><?= h($venue->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Inside Venue') ?></th>
            <td><?= $venue->has('inside_venue') ? $this->Html->link($venue->inside_venue->name, ['controller' => 'Venues', 'action' => 'view', $venue->inside_venue->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($venue->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Slug') ?></th>
            <td><?= h($venue->slug) ?></td>
        </tr>
        <tr>
            <th><?= __('Seo Title') ?></th>
            <td><?= h($venue->seo_title) ?></td>
        </tr>
        <tr>
            <th><?= __('Seo Desc') ?></th>
            <td><?= h($venue->seo_desc) ?></td>
        </tr>
        <tr>
            <th><?= __('Page Url') ?></th>
            <td><?= h($venue->page_url) ?></td>
        </tr>
        <tr>
            <th><?= __('Province') ?></th>
            <td><?= $venue->has('province') ? $this->Html->link($venue->province->name, ['controller' => 'Provinces', 'action' => 'view', $venue->province->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= $venue->has('country') ? $this->Html->link($venue->country->name, ['controller' => 'Countries', 'action' => 'view', $venue->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= $venue->has('city') ? $this->Html->link($venue->city->name, ['controller' => 'Cities', 'action' => 'view', $venue->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Neighbourhood') ?></th>
            <td><?= $venue->has('neighbourhood') ? $this->Html->link($venue->neighbourhood->name, ['controller' => 'Neighbourhoods', 'action' => 'view', $venue->neighbourhood->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Establishment Type') ?></th>
            <td><?= $venue->has('establishment_type') ? $this->Html->link($venue->establishment_type->name, ['controller' => 'EstablishmentTypes', 'action' => 'view', $venue->establishment_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Phone 1') ?></th>
            <td><?= h($venue->phone_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone 2') ?></th>
            <td><?= h($venue->phone_2) ?></td>
        </tr>
        <tr>
            <th><?= __('Website Url') ?></th>
            <td><?= h($venue->website_url) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($venue->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Hours Sun') ?></th>
            <td><?= h($venue->hours_sun) ?></td>
        </tr>
        <tr>
            <th><?= __('Hours Mon') ?></th>
            <td><?= h($venue->hours_mon) ?></td>
        </tr>
        <tr>
            <th><?= __('Hours Tue') ?></th>
            <td><?= h($venue->hours_tue) ?></td>
        </tr>
        <tr>
            <th><?= __('Hours Wed') ?></th>
            <td><?= h($venue->hours_wed) ?></td>
        </tr>
        <tr>
            <th><?= __('Hours Thu') ?></th>
            <td><?= h($venue->hours_thu) ?></td>
        </tr>
        <tr>
            <th><?= __('Hours Fri') ?></th>
            <td><?= h($venue->hours_fri) ?></td>
        </tr>
        <tr>
            <th><?= __('Hours Sat') ?></th>
            <td><?= h($venue->hours_sat) ?></td>
        </tr>
        <tr>
            <th><?= __('Hours Holidays') ?></th>
            <td><?= h($venue->hours_holidays) ?></td>
        </tr>
        <tr>
            <th><?= __('Inside Venue Id') ?></th>
            <td><?= $this->Number->format($venue->inside_venue_id) ?></td>
        </tr>
        <tr>
            <th><?= __('User Rating') ?></th>
            <td><?= $this->Number->format($venue->user_rating) ?></td>
        </tr>
        <tr>
            <th><?= __('User Votes') ?></th>
            <td><?= $this->Number->format($venue->user_votes) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($venue->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($venue->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Flag Mall') ?></th>
            <td><?= $venue->flag_mall ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Flag Closed') ?></th>
            <td><?= $venue->flag_closed ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Flag Published') ?></th>
            <td><?= $venue->flag_published ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($venue->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Geo Cords') ?></h4>
        <?= $this->Text->autoParagraph(h($venue->geo_cords)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Amenities') ?></h4>
        <?php if (!empty($venue->amenities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Flag All') ?></th>
                <th><?= __('Flag Bar') ?></th>
                <th><?= __('Flag Restaurant') ?></th>
                <th><?= __('Flag Hotel') ?></th>
                <th><?= __('Flag Store') ?></th>
                <th><?= __('Flag Mall') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($venue->amenities as $amenities): ?>
            <tr>
                <td><?= h($amenities->id) ?></td>
                <td><?= h($amenities->title) ?></td>
                <td><?= h($amenities->flag_all) ?></td>
                <td><?= h($amenities->flag_bar) ?></td>
                <td><?= h($amenities->flag_restaurant) ?></td>
                <td><?= h($amenities->flag_hotel) ?></td>
                <td><?= h($amenities->flag_store) ?></td>
                <td><?= h($amenities->flag_mall) ?></td>
                <td><?= h($amenities->created) ?></td>
                <td><?= h($amenities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Amenities', 'action' => 'view', $amenities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Amenities', 'action' => 'edit', $amenities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Amenities', 'action' => 'delete', $amenities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amenities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cuisines') ?></h4>
        <?php if (!empty($venue->cuisines)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Flag All') ?></th>
                <th><?= __('Flag Bar') ?></th>
                <th><?= __('Flag Restaurant') ?></th>
                <th><?= __('Flag Hotel') ?></th>
                <th><?= __('Flag Store') ?></th>
                <th><?= __('Flag Mall') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($venue->cuisines as $cuisines): ?>
            <tr>
                <td><?= h($cuisines->id) ?></td>
                <td><?= h($cuisines->title) ?></td>
                <td><?= h($cuisines->flag_all) ?></td>
                <td><?= h($cuisines->flag_bar) ?></td>
                <td><?= h($cuisines->flag_restaurant) ?></td>
                <td><?= h($cuisines->flag_hotel) ?></td>
                <td><?= h($cuisines->flag_store) ?></td>
                <td><?= h($cuisines->flag_mall) ?></td>
                <td><?= h($cuisines->created) ?></td>
                <td><?= h($cuisines->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cuisines', 'action' => 'view', $cuisines->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cuisines', 'action' => 'edit', $cuisines->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cuisines', 'action' => 'delete', $cuisines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuisines->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Features') ?></h4>
        <?php if (!empty($venue->features)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Flag All') ?></th>
                <th><?= __('Flag Bar') ?></th>
                <th><?= __('Flag Restaurant') ?></th>
                <th><?= __('Flag Hotel') ?></th>
                <th><?= __('Flag Store') ?></th>
                <th><?= __('Flag Mall') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($venue->features as $features): ?>
            <tr>
                <td><?= h($features->id) ?></td>
                <td><?= h($features->title) ?></td>
                <td><?= h($features->flag_all) ?></td>
                <td><?= h($features->flag_bar) ?></td>
                <td><?= h($features->flag_restaurant) ?></td>
                <td><?= h($features->flag_hotel) ?></td>
                <td><?= h($features->flag_store) ?></td>
                <td><?= h($features->flag_mall) ?></td>
                <td><?= h($features->created) ?></td>
                <td><?= h($features->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Features', 'action' => 'view', $features->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Features', 'action' => 'edit', $features->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Features', 'action' => 'delete', $features->id], ['confirm' => __('Are you sure you want to delete # {0}?', $features->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Venue Photos') ?></h4>
        <?php if (!empty($venue->venue_photos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Meta Data') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($venue->venue_photos as $venuePhotos): ?>
            <tr>
                <td><?= h($venuePhotos->id) ?></td>
                <td><?= h($venuePhotos->title) ?></td>
                <td><?= h($venuePhotos->meta_data) ?></td>
                <td><?= h($venuePhotos->created) ?></td>
                <td><?= h($venuePhotos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'VenuePhotos', 'action' => 'view', $venuePhotos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'VenuePhotos', 'action' => 'edit', $venuePhotos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'VenuePhotos', 'action' => 'delete', $venuePhotos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venuePhotos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
