<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Register $register
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Register'), ['action' => 'edit', $register->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Register'), ['action' => 'delete', $register->id], ['confirm' => __('Are you sure you want to delete # {0}?', $register->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Register'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Register'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="register view large-9 medium-8 columns content">
    <h3><?= h($register->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($register->Username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($register->Password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($register->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($register->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($register->Age) ?></td>
        </tr>
    </table>
</div>
