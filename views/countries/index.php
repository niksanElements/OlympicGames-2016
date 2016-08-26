<?php $this->title = 'countries'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <table class="table table-strip table-inverse">
        <thead>

        <th>
            <a href="<?=APP_ROOT?>/countries/index/shortAsc">/\</a>
            &nbsp;<a href="<?=APP_ROOT?>/countries/index/shortDesc">\/</a>
            &nbsp;Short Name:
        </th>
        <th>
            <a href="<?=APP_ROOT?>/countries/index/countryAsc">/\</a>
            &nbsp;<a href="<?=APP_ROOT?>/countries/index/countryDesc">\/</a>
            &nbsp;Country:
        </th>
        <th>
            <a href="<?=APP_ROOT?>/countries/index/athletestotalAsc">/\</a>
            &nbsp;<a href="<?=APP_ROOT?>/countries/index/athletestotalDesc">\/</a>
            &nbsp;Total athletes:
        </th>
        <th>
            <a href="<?=APP_ROOT?>/countries/index/medalstotalAsc">/\</a>
            &nbsp;<a href="<?=APP_ROOT?>/countries/index/medalstotalDesc">\/</a>
            &nbsp;Total medals:
        </th>
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
