<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Songs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="songs form large-9 medium-8 columns content">
    <?= $this->Form->create($song) ?>
    <fieldset>
        <legend><?= __('Add Song') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('artist');
            echo $this->Form->input('url');
            echo $this->Form->input('comment');
            echo $this->Form->input('userId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
