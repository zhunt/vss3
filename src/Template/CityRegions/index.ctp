<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New City Region'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cityRegions index large-9 medium-8 columns content">
    <h3><?= __('City Regions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seo_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cityRegions as $cityRegion): ?>
            <tr>
                <td><?= $this->Number->format($cityRegion->id) ?></td>
                <td><?= h($cityRegion->name) ?></td>
                <td><?= h($cityRegion->slug) ?></td>
                <td><?= h($cityRegion->seo_title) ?></td>
                <td><?= $cityRegion->has('country') ? $this->Html->link($cityRegion->country->name, ['controller' => 'Countries', 'action' => 'view', $cityRegion->country->id]) : '' ?></td>
                <td><?= $cityRegion->has('province') ? $this->Html->link($cityRegion->province->name, ['controller' => 'Provinces', 'action' => 'view', $cityRegion->province->id]) : '' ?></td>
                <td><?= $cityRegion->has('city') ? $this->Html->link($cityRegion->city->name, ['controller' => 'Cities', 'action' => 'view', $cityRegion->city->id]) : '' ?></td>
                <td><?= h($cityRegion->created) ?></td>
                <td><?= h($cityRegion->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cityRegion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cityRegion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cityRegion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cityRegion->id)]) ?>
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
