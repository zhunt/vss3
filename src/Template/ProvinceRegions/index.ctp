<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Province Region'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="provinceRegions index large-9 medium-8 columns content">
    <h3><?= __('Province Regions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('seo_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($provinceRegions as $provinceRegion): ?>
            <tr>
                <td><?= $this->Number->format($provinceRegion->id) ?></td>
                <td><?= h($provinceRegion->name) ?></td>
                <td><?= h($provinceRegion->slug) ?></td>
                <td><?= h($provinceRegion->seo_title) ?></td>
                <td><?= $provinceRegion->has('country') ? $this->Html->link($provinceRegion->country->name, ['controller' => 'Countries', 'action' => 'view', $provinceRegion->country->id]) : '' ?></td>
                <td><?= $provinceRegion->has('province') ? $this->Html->link($provinceRegion->province->name, ['controller' => 'Provinces', 'action' => 'view', $provinceRegion->province->id]) : '' ?></td>
                <td><?= h($provinceRegion->created) ?></td>
                <td><?= h($provinceRegion->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $provinceRegion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $provinceRegion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $provinceRegion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $provinceRegion->id)]) ?>
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
