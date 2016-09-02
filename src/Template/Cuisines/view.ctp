<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cuisine'), ['action' => 'edit', $cuisine->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cuisine'), ['action' => 'delete', $cuisine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuisine->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cuisines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cuisine'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cuisines view large-9 medium-8 columns content">
    <h3><?= h($cuisine->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($cuisine->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cuisine->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($cuisine->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($cuisine->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Flag All') ?></th>
            <td><?= $cuisine->flag_all ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Flag Bar') ?></th>
            <td><?= $cuisine->flag_bar ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Flag Restaurant') ?></th>
            <td><?= $cuisine->flag_restaurant ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Flag Hotel') ?></th>
            <td><?= $cuisine->flag_hotel ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Flag Store') ?></th>
            <td><?= $cuisine->flag_store ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Flag Mall') ?></th>
            <td><?= $cuisine->flag_mall ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Venues') ?></h4>
        <?php if (!empty($cuisine->venues)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Slug') ?></th>
                <th><?= __('Seo Title') ?></th>
                <th><?= __('Seo Desc') ?></th>
                <th><?= __('Page Url') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Province Id') ?></th>
                <th><?= __('Country Id') ?></th>
                <th><?= __('City Id') ?></th>
                <th><?= __('Geo Cords') ?></th>
                <th><?= __('Neighbourhood Id') ?></th>
                <th><?= __('Establishment Type Id') ?></th>
                <th><?= __('Flag Mall') ?></th>
                <th><?= __('Flag Closed') ?></th>
                <th><?= __('Flag Published') ?></th>
                <th><?= __('Inside Venue Id') ?></th>
                <th><?= __('Phone 1') ?></th>
                <th><?= __('Phone 2') ?></th>
                <th><?= __('Website Url') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Hours Sun') ?></th>
                <th><?= __('Hours Mon') ?></th>
                <th><?= __('Hours Tue') ?></th>
                <th><?= __('Hours Wed') ?></th>
                <th><?= __('Hours Thu') ?></th>
                <th><?= __('Hours Fri') ?></th>
                <th><?= __('Hours Sat') ?></th>
                <th><?= __('Hours Holidays') ?></th>
                <th><?= __('User Rating') ?></th>
                <th><?= __('User Votes') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cuisine->venues as $venues): ?>
            <tr>
                <td><?= h($venues->id) ?></td>
                <td><?= h($venues->name) ?></td>
                <td><?= h($venues->slug) ?></td>
                <td><?= h($venues->seo_title) ?></td>
                <td><?= h($venues->seo_desc) ?></td>
                <td><?= h($venues->page_url) ?></td>
                <td><?= h($venues->description) ?></td>
                <td><?= h($venues->province_id) ?></td>
                <td><?= h($venues->country_id) ?></td>
                <td><?= h($venues->city_id) ?></td>
                <td><?= h($venues->geo_cords) ?></td>
                <td><?= h($venues->neighbourhood_id) ?></td>
                <td><?= h($venues->establishment_type_id) ?></td>
                <td><?= h($venues->flag_mall) ?></td>
                <td><?= h($venues->flag_closed) ?></td>
                <td><?= h($venues->flag_published) ?></td>
                <td><?= h($venues->inside_venue_id) ?></td>
                <td><?= h($venues->phone_1) ?></td>
                <td><?= h($venues->phone_2) ?></td>
                <td><?= h($venues->website_url) ?></td>
                <td><?= h($venues->address) ?></td>
                <td><?= h($venues->hours_sun) ?></td>
                <td><?= h($venues->hours_mon) ?></td>
                <td><?= h($venues->hours_tue) ?></td>
                <td><?= h($venues->hours_wed) ?></td>
                <td><?= h($venues->hours_thu) ?></td>
                <td><?= h($venues->hours_fri) ?></td>
                <td><?= h($venues->hours_sat) ?></td>
                <td><?= h($venues->hours_holidays) ?></td>
                <td><?= h($venues->user_rating) ?></td>
                <td><?= h($venues->user_votes) ?></td>
                <td><?= h($venues->created) ?></td>
                <td><?= h($venues->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Venues', 'action' => 'view', $venues->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Venues', 'action' => 'edit', $venues->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Venues', 'action' => 'delete', $venues->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venues->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
