<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Image Upload'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="imageUploads index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('filename') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($imageUploads as $imageUpload): ?>
        <tr>
            <td><?= $this->Html->link( $imageUpload->id , ['action' => 'edit', $imageUpload->id]) ?></td>
            <td><?= $this->Html->link( $imageUpload->name , ['action' => 'edit', $imageUpload->id]) ?></td>
            <td><?= h($imageUpload->filename) ?></td>
            <td><?= h($imageUpload->created) ?></td>
            <td><?= h($imageUpload->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $imageUpload->id]) ?>
                
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $imageUpload->id], ['confirm' => __('Are you sure you want to delete # {0}?', $imageUpload->id)]) ?>
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
