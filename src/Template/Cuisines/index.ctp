<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cuisine'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cuisines index large-9 medium-8 columns content">
    <h3><?= __('Cuisines') ?></h3>
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
            <?php foreach ($cuisines as $cuisine): ?>
            <tr>
                <td><?= $this->Number->format($cuisine->id) ?></td>
                <td><?= h($cuisine->title) ?></td>
                <td><?= h($cuisine->flag_all) ?></td>
                <td><?= h($cuisine->flag_bar) ?></td>
                <td><?= h($cuisine->flag_restaurant) ?></td>
                <td><?= h($cuisine->flag_hotel) ?></td>
                <td><?= h($cuisine->flag_store) ?></td>
                <td><?= h($cuisine->flag_mall) ?></td>
                <td><?= h($cuisine->created) ?></td>
                <td><?= h($cuisine->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cuisine->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cuisine->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cuisine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuisine->id)]) ?>
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
