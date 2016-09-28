<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Song'), ['action' => 'edit', $song->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Song'), ['action' => 'delete', $song->id], ['confirm' => __('Are you sure you want to delete # {0}?', $song->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Songs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Song'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="songs view large-9 medium-8 columns content">
    <h3><?= h($song->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($song->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Artist') ?></th>
            <td><?= h($song->artist) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($song->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment') ?></th>
            <td><?= h($song->comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($song->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserId') ?></th>
            <td><?= $this->Number->format($song->userId) ?></td>
        </tr>
    </table>
</div>
