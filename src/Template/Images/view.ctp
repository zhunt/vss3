<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Image'), ['action' => 'edit', $image->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Image'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="images view large-9 medium-8 columns content">
    <h3><?= h($image->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($image->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($image->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Meta Data') ?></h4>
        <?= $this->Text->autoParagraph(h($image->meta_data)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cities') ?></h4>
        <?php if (!empty($image->cities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Slug') ?></th>
                <th><?= __('Page Url') ?></th>
                <th><?= __('Google Locality') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Seo Title') ?></th>
                <th><?= __('Image Id') ?></th>
                <th><?= __('Geo Cords') ?></th>
                <th><?= __('Province Id') ?></th>
                <th><?= __('Country Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($image->cities as $cities): ?>
            <tr>
                <td><?= h($cities->id) ?></td>
                <td><?= h($cities->name) ?></td>
                <td><?= h($cities->slug) ?></td>
                <td><?= h($cities->page_url) ?></td>
                <td><?= h($cities->google_locality) ?></td>
                <td><?= h($cities->description) ?></td>
                <td><?= h($cities->seo_title) ?></td>
                <td><?= h($cities->image_id) ?></td>
                <td><?= h($cities->geo_cords) ?></td>
                <td><?= h($cities->province_id) ?></td>
                <td><?= h($cities->country_id) ?></td>
                <td><?= h($cities->created) ?></td>
                <td><?= h($cities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cities', 'action' => 'view', $cities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cities', 'action' => 'edit', $cities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cities', 'action' => 'delete', $cities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
