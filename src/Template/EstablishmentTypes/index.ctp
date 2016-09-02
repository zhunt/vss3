<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Establishment Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="establishmentTypes index large-9 medium-8 columns content">
    <h3><?= __('Establishment Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($establishmentTypes as $establishmentType): ?>
            <tr>
                <td><?= $this->Number->format($establishmentType->id) ?></td>
                <td><?= h($establishmentType->name) ?></td>
                <td><?= h($establishmentType->slug) ?></td>
                <td><?= h($establishmentType->created) ?></td>
                <td><?= h($establishmentType->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $establishmentType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $establishmentType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $establishmentType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $establishmentType->id)]) ?>
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
