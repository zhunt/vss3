<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="features index large-9 medium-8 columns content">
    <h3><?= __('Features') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('flag_all') ?></th>
                <th><?= $this->Paginator->sort('flag_bar') ?></th>
                <th><?= $this->Paginator->sort('flag_restaurant') ?></th>
                <th><?= $this->Paginator->sort('flag_hotel') ?></th>
                <th><?= $this->Paginator->sort('flag_store') ?></th>
                <th><?= $this->Paginator->sort('flag_mall') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($features as $feature): ?>
            <tr>
                <td><?= $this->Number->format($feature->id) ?></td>
                <td><?= h($feature->title) ?></td>
                <td><?= h($feature->flag_all) ?></td>
                <td><?= h($feature->flag_bar) ?></td>
                <td><?= h($feature->flag_restaurant) ?></td>
                <td><?= h($feature->flag_hotel) ?></td>
                <td><?= h($feature->flag_store) ?></td>
                <td><?= h($feature->flag_mall) ?></td>
                <td><?= h($feature->created) ?></td>
                <td><?= h($feature->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $feature->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feature->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feature->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feature->id)]) ?>
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
