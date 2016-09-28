<div>
    <h3>Find Song</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->input('find'); ?>
        <?= $this->Form->button('Submit') ?>
        <?= $this->Form->end() ?>
    </fieldset>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>ARTIST</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($songs as $song): ?>
        <tr>
            <td><?= h($song->id) ?></td>
            <td><?= h($song->title) ?></td>
            <td><?= h($song->artist) ?></td>
        </tr>
            <?php endforeach; ?>
            </tbody>
    </table>
</div>
