<?php $this->title = 'Countries'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <div class="container">
        <form>
            <table class="ui table tablet stackable">
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
                <tbody>
                <?php foreach ($this->countries as $country):?>

                    <tr>
                        <th><i class="<?php
                            $str = $country['countryShort'];
                            $str = strtolower($str);
                            echo $str;
                            ?> flag"></i></th>
                        <th><?=$country['countryShort']?></th>
                        <th><?=$country['countryFull']?></th>
                        <th><?=$country['playersTotal']?></th>
                        <th><?=$country['medalsTotal']?></th>
                        <th><?=$country['medalsGold']?></th>
                        <th><?=$country['medalsSilver']?></th>
                        <th><?=$country['medalsBronze']?></th>
                    </tr>

                <?php endforeach ?>
                </tbody>
            </table>
            </form>
        </div>
</main>
