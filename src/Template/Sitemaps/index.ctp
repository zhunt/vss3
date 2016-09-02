<?php use Cake\Core\Configure;?>
<table>
    <tbody>
    <?php foreach ($articles as $article): ?>
    <tr>

    <td><?= Configure::read('siteUrlFull') . '/' . $article->slug; ?></td>

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

