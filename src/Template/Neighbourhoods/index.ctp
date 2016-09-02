<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Neighbourhood'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="neighbourhoods index large-9 medium-8 columns content">
    <h3><?= __('Neighbourhoods') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('page_url') ?></th>
                <th><?= $this->Paginator->sort('google_administrative_area_level_1') ?></th>
                <th><?= $this->Paginator->sort('google_administrative_area_level_2') ?></th>
                <th><?= $this->Paginator->sort('seo_title') ?></th>
                <th><?= $this->Paginator->sort('city_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($neighbourhoods as $neighbourhood): ?>
            <tr>
                <td><?= $this->Number->format($neighbourhood->id) ?></td>
                <td><?= h($neighbourhood->name) ?></td>
                <td><?= h($neighbourhood->slug) ?></td>
                <td><?= h($neighbourhood->page_url) ?></td>
                <td><?= h($neighbourhood->google_administrative_area_level_1) ?></td>
                <td><?= h($neighbourhood->google_administrative_area_level_2) ?></td>
                <td><?= h($neighbourhood->seo_title) ?></td>
                <td><?= $neighbourhood->has('city') ? $this->Html->link($neighbourhood->city->name, ['controller' => 'Cities', 'action' => 'view', $neighbourhood->city->id]) : '' ?></td>
                <td><?= h($neighbourhood->created) ?></td>
                <td><?= h($neighbourhood->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $neighbourhood->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $neighbourhood->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $neighbourhood->id], ['confirm' => __('Are you sure you want to delete # {0}?', $neighbourhood->id)]) ?>
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
