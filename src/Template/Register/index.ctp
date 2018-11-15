<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Register[]|\Cake\Collection\CollectionInterface $register
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Register'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="register index large-9 medium-8 columns content">
    <h3><?= __('Register') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Age') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($register as $register): ?>
            <tr>
                <td><?= $this->Number->format($register->id) ?></td>
                <td><?= h($register->Username) ?></td>
                <td><?= h($register->Password) ?></td>
                <td><?= h($register->Email) ?></td>
                <td><?= $this->Number->format($register->Age) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $register->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $register->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $register->id], ['confirm' => __('Are you sure you want to delete # {0}?', $register->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
