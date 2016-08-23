<?php $this->title = 'Venues'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
<table>
    <tr>
        <th>
        Venue Name
        </th>
        <th>
            Sports Played
        </th>
        <th>
            Venue Capacity
        </th>
    </tr>
    <?php foreach($this->venues as $venue): ?>
    <tr>
        <th>
            <?=$venue["venue_name"]?>
        </th>
        <th>
            <?=$venue["sport"]?>
        </th>
        <th>
            <?=$venue["capacity"]?>
        </th>
    </tr>
  <?php endforeach ?>
</table>
</main>
