<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Register $register
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $register->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $register->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Register'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="register form large-9 medium-8 columns content">
    <?= $this->Form->create($register) ?>
    <fieldset>
        <legend><?= __('Edit Register') ?></legend>
        <?php
            echo $this->Form->control('Username');
            echo $this->Form->control('Password');
            echo $this->Form->control('Email');
            echo $this->Form->control('Age');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
