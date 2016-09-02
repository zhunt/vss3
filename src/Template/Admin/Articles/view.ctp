<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Image Uploads'), ['controller' => 'ImageUploads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image Upload'), ['controller' => 'ImageUploads', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="articles view large-10 medium-9 columns">
    <h2><?= h($article->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($article->name) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($article->slug) ?></p>
            <h6 class="subheader"><?= __('Seo Title') ?></h6>
            <p><?= h($article->seo_title) ?></p>
            <h6 class="subheader"><?= __('Seo Desc') ?></h6>
            <p><?= h($article->seo_desc) ?></p>
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $article->has('category') ? $this->Html->link($article->category->name, ['controller' => 'Categories', 'action' => 'view', $article->category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Image Upload') ?></h6>
            <p><?= $article->has('image_upload') ? $this->Html->link($article->image_upload->filename, ['controller' => 'ImageUploads', 'action' => 'view', $article->image_upload->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($article->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($article->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($article->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Flag Html') ?></h6>
            <p><?= $article->flag_html ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Flag Featured') ?></h6>
            <p><?= $article->flag_featured ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Body') ?></h6>
            <?= $this->Text->autoParagraph(h($article->body)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Feature Text') ?></h6>
            <?= $this->Text->autoParagraph(h($article->feature_text)); ?>

        </div>
    </div>
</div>
