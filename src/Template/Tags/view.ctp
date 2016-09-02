<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($tag->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Slug') ?></th>
            <td><?= h($tag->slug) ?></td>
        </tr>
        <tr>
            <th><?= __('Company') ?></th>
            <td><?= $tag->has('company') ? $this->Html->link($tag->company->name, ['controller' => 'Companies', 'action' => 'view', $tag->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Meta Desc') ?></th>
            <td><?= h($tag->meta_desc) ?></td>
        </tr>
        <tr>
            <th><?= __('Seo Title') ?></th>
            <td><?= h($tag->seo_title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tag->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tag->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($tag->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Articles') ?></h4>
        <?php if (!empty($tag->articles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Slug') ?></th>
                <th><?= __('Seo Title') ?></th>
                <th><?= __('Seo Desc') ?></th>
                <th><?= __('Social Image Url') ?></th>
                <th><?= __('Subhead') ?></th>
                <th><?= __('Body') ?></th>
                <th><?= __('Flag Html') ?></th>
                <th><?= __('Category Id') ?></th>
                <th><?= __('Category Id 2') ?></th>
                <th><?= __('Flag Featured') ?></th>
                <th><?= __('Flag Published') ?></th>
                <th><?= __('Feature Image Id') ?></th>
                <th><?= __('Feature Text') ?></th>
                <th><?= __('Author') ?></th>
                <th><?= __('Author Url') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->articles as $articles): ?>
            <tr>
                <td><?= h($articles->id) ?></td>
                <td><?= h($articles->name) ?></td>
                <td><?= h($articles->slug) ?></td>
                <td><?= h($articles->seo_title) ?></td>
                <td><?= h($articles->seo_desc) ?></td>
                <td><?= h($articles->social_image_url) ?></td>
                <td><?= h($articles->subhead) ?></td>
                <td><?= h($articles->body) ?></td>
                <td><?= h($articles->flag_html) ?></td>
                <td><?= h($articles->category_id) ?></td>
                <td><?= h($articles->category_id_2) ?></td>
                <td><?= h($articles->flag_featured) ?></td>
                <td><?= h($articles->flag_published) ?></td>
                <td><?= h($articles->feature_image_id) ?></td>
                <td><?= h($articles->feature_text) ?></td>
                <td><?= h($articles->author) ?></td>
                <td><?= h($articles->author_url) ?></td>
                <td><?= h($articles->created) ?></td>
                <td><?= h($articles->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
