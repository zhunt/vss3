<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit City Region'), ['action' => 'edit', $cityRegion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete City Region'), ['action' => 'delete', $cityRegion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cityRegion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List City Regions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City Region'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cityRegions view large-9 medium-8 columns content">
    <h3><?= h($cityRegion->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($cityRegion->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($cityRegion->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Seo Title') ?></th>
            <td><?= h($cityRegion->seo_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $cityRegion->has('country') ? $this->Html->link($cityRegion->country->name, ['controller' => 'Countries', 'action' => 'view', $cityRegion->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province') ?></th>
            <td><?= $cityRegion->has('province') ? $this->Html->link($cityRegion->province->name, ['controller' => 'Provinces', 'action' => 'view', $cityRegion->province->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= $cityRegion->has('city') ? $this->Html->link($cityRegion->city->name, ['controller' => 'Cities', 'action' => 'view', $cityRegion->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cityRegion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cityRegion->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cityRegion->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($cityRegion->description)); ?>
    </div>
</div>
