<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Venue Photo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="venuePhotos index large-9 medium-8 columns content">
    <h3><?= __('Venue Photos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($venuePhotos as $venuePhoto): ?>
            <tr>
                <td><?= $this->Number->format($venuePhoto->id) ?></td>
                <td><?= h($venuePhoto->title) ?></td>
                <td><?= h($venuePhoto->created) ?></td>
                <td><?= h($venuePhoto->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $venuePhoto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venuePhoto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venuePhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venuePhoto->id)]) ?>
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
