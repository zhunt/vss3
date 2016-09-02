<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['action' => 'add']) ?></li>
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
<div class="venues index large-9 medium-8 columns content">
    <h3><?= __('Venues') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('seo_title') ?></th>
                <th><?= $this->Paginator->sort('seo_desc') ?></th>
                <th><?= $this->Paginator->sort('page_url') ?></th>
                <th><?= $this->Paginator->sort('province_id') ?></th>
                <th><?= $this->Paginator->sort('country_id') ?></th>
                <th><?= $this->Paginator->sort('city_id') ?></th>
                <th><?= $this->Paginator->sort('neighbourhood_id') ?></th>
                <th><?= $this->Paginator->sort('establishment_type_id') ?></th>
                <th><?= $this->Paginator->sort('flag_mall') ?></th>
                <th><?= $this->Paginator->sort('flag_closed') ?></th>
                <th><?= $this->Paginator->sort('flag_published') ?></th>
                <th><?= $this->Paginator->sort('inside_venue_id') ?></th>
                <th><?= $this->Paginator->sort('phone_1') ?></th>
                <th><?= $this->Paginator->sort('phone_2') ?></th>
                <th><?= $this->Paginator->sort('website_url') ?></th>
                <th><?= $this->Paginator->sort('address') ?></th>
                <th><?= $this->Paginator->sort('hours_sun') ?></th>
                <th><?= $this->Paginator->sort('hours_mon') ?></th>
                <th><?= $this->Paginator->sort('hours_tue') ?></th>
                <th><?= $this->Paginator->sort('hours_wed') ?></th>
                <th><?= $this->Paginator->sort('hours_thu') ?></th>
                <th><?= $this->Paginator->sort('hours_fri') ?></th>
                <th><?= $this->Paginator->sort('hours_sat') ?></th>
                <th><?= $this->Paginator->sort('hours_holidays') ?></th>
                <th><?= $this->Paginator->sort('user_rating') ?></th>
                <th><?= $this->Paginator->sort('user_votes') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($venues as $venue): ?>
            <tr>
                <td><?= $venue->has('inside_venue') ? $this->Html->link($venue->inside_venue->name, ['controller' => 'Venues', 'action' => 'view', $venue->inside_venue->id]) : '' ?></td>
                <td><?= h($venue->name) ?></td>
                <td><?= h($venue->slug) ?></td>
                <td><?= h($venue->seo_title) ?></td>
                <td><?= h($venue->seo_desc) ?></td>
                <td><?= h($venue->page_url) ?></td>
                <td><?= $venue->has('province') ? $this->Html->link($venue->province->name, ['controller' => 'Provinces', 'action' => 'view', $venue->province->id]) : '' ?></td>
                <td><?= $venue->has('country') ? $this->Html->link($venue->country->name, ['controller' => 'Countries', 'action' => 'view', $venue->country->id]) : '' ?></td>
                <td><?= $venue->has('city') ? $this->Html->link($venue->city->name, ['controller' => 'Cities', 'action' => 'view', $venue->city->id]) : '' ?></td>
                <td><?= $venue->has('neighbourhood') ? $this->Html->link($venue->neighbourhood->name, ['controller' => 'Neighbourhoods', 'action' => 'view', $venue->neighbourhood->id]) : '' ?></td>
                <td><?= $venue->has('establishment_type') ? $this->Html->link($venue->establishment_type->name, ['controller' => 'EstablishmentTypes', 'action' => 'view', $venue->establishment_type->id]) : '' ?></td>
                <td><?= h($venue->flag_mall) ?></td>
                <td><?= h($venue->flag_closed) ?></td>
                <td><?= h($venue->flag_published) ?></td>
                <td><?= $this->Number->format($venue->inside_venue_id) ?></td>
                <td><?= h($venue->phone_1) ?></td>
                <td><?= h($venue->phone_2) ?></td>
                <td><?= h($venue->website_url) ?></td>
                <td><?= h($venue->address) ?></td>
                <td><?= h($venue->hours_sun) ?></td>
                <td><?= h($venue->hours_mon) ?></td>
                <td><?= h($venue->hours_tue) ?></td>
                <td><?= h($venue->hours_wed) ?></td>
                <td><?= h($venue->hours_thu) ?></td>
                <td><?= h($venue->hours_fri) ?></td>
                <td><?= h($venue->hours_sat) ?></td>
                <td><?= h($venue->hours_holidays) ?></td>
                <td><?= $this->Number->format($venue->user_rating) ?></td>
                <td><?= $this->Number->format($venue->user_votes) ?></td>
                <td><?= h($venue->created) ?></td>
                <td><?= h($venue->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $venue->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venue->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venue->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
