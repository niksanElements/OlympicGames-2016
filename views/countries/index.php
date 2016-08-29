<?php $this->title = 'Countries'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <div class="container">
        <form>
            <table class="table table-responsive table-inverse">
                <thead>
                <th>
                    Flag
                </th>
                <th>
                    <a href="<?=APP_ROOT?>/countries/index/shortAsc"></a>
                    &nbsp;<a href="<?=APP_ROOT?>/countries/index/shortDesc"></a>
                    &nbsp;Short:
                </th>
                <th>
                    <a href="<?=APP_ROOT?>/countries/index/countryAsc"></a>
                    &nbsp;<a href="<?=APP_ROOT?>/countries/index/countryDesc"></a>
                    &nbsp;Country:
                </th>
                <th>
                    <a href="<?=APP_ROOT?>/countries/index/athletestotalAsc"></a>
                    &nbsp;<a href="<?=APP_ROOT?>/countries/index/athletestotalDesc"></a>
                    &nbsp;Athletes:
                </th>
                <th>
                    <a href="<?=APP_ROOT?>/countries/index/medalstotalAsc"></a>
                    &nbsp;<a href="<?=APP_ROOT?>/countries/index/medalstotalDesc"></a>
                    &nbsp;Medals:
                </th>
                <th>Gold</th>
                <th>Silver</th>
                <th>Bronze</th>
                </thead>
                <tbody>
                <?php foreach ($this->countries as $country):?>

                    <tr>
                        <td><i class="<?php
                            $str = $country['countryShort'];
                            $str = strtolower($str);
                            echo $str;
                            ?> flag"></i></td>
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
            </form>
        </div>
</main>
