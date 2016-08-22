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
</table>
</main>