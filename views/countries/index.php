<?php $this->title = 'countries'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <table class="table table-strip table-inverse">
        <thead>

        <th>Short</th>
        <th>Country</th>
        <th>Total athlets</th>
        <th>Total medals</th>
        <th>Gold medals</th>
        <th>Silver medals</th>
        <th>Bronze medals</th>
        </thead>
        <tbody>
        <?php foreach ($this->countries as $country):?>

            <tr>
                <td><?=$country['countryShort']?></td>
                <td><?=$country['countryFull']?></td>
                <td><?=$country['playersTotal']?></td>
                <td><?=$country['medalsTotal']?></td>
                <td><?=$country['medalsGold']?></td>
                <td><?=$country['medalsSilver']?></td>
                <td><?=$country['medalsBronze']?></td>
            </tr>

        <?php endforeach ?>
        </tbody>
    </table>
</main>
