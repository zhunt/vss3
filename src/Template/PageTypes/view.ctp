<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Page Type'), ['action' => 'edit', $pageType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Page Type'), ['action' => 'delete', $pageType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pageType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Page Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Landings'), ['controller' => 'Landings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Landing'), ['controller' => 'Landings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="pageTypes view large-10 medium-9 columns">
    <h2><?= h($pageType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($pageType->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($pageType->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Landings') ?></h4>
    <?php if (!empty($pageType->landings)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Page Name') ?></th>
            <th><?= __('Seo Title') ?></th>
            <th><?= __('Seo Desc') ?></th>
            <th><?= __('Page Type Id') ?></th>
            <th><?= __('Block 1 Title') ?></th>
            <th><?= __('Block 1 Content') ?></th>
            <th><?= __('Block 2 Title') ?></th>
            <th><?= __('Block 2 Content') ?></th>
            <th><?= __('Block 3 Title') ?></th>
            <th><?= __('Block 3 Content') ?></th>
            <th><?= __('Block 4 Title') ?></th>
            <th><?= __('Block 4 Content') ?></th>
            <th><?= __('Block 5 Title') ?></th>
            <th><?= __('Block 5 Content') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($pageType->landings as $landings): ?>
        <tr>
            <td><?= h($landings->id) ?></td>
            <td><?= h($landings->page_name) ?></td>
            <td><?= h($landings->seo_title) ?></td>
            <td><?= h($landings->seo_desc) ?></td>
            <td><?= h($landings->page_type_id) ?></td>
            <td><?= h($landings->block_1_title) ?></td>
            <td><?= h($landings->block_1_content) ?></td>
            <td><?= h($landings->block_2_title) ?></td>
            <td><?= h($landings->block_2_content) ?></td>
            <td><?= h($landings->block_3_title) ?></td>
            <td><?= h($landings->block_3_content) ?></td>
            <td><?= h($landings->block_4_title) ?></td>
            <td><?= h($landings->block_4_content) ?></td>
            <td><?= h($landings->block_5_title) ?></td>
            <td><?= h($landings->block_5_content) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Landings', 'action' => 'view', $landings->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Landings', 'action' => 'edit', $landings->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Landings', 'action' => 'delete', $landings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $landings->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
