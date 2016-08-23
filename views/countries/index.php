<?php $this->title = 'countries'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <table class="table table-strip table-inverse">
        <thead>

                 <th>Short</th>
                 <th>Country</th>
                 <th>Athlets</th>

        </thead>
        <tbody>
    <?php foreach ($this->countries as $country):?>

        <tr>
            <td><?= htmlspecialchars($country['short_name']) ?></td>
            <td><?= htmlspecialchars($country['full_name']) ?></td>
        </tr>

    <?php endforeach ?>
        </tbody>
</table>
</main>