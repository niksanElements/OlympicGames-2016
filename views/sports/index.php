<?php $this->title = 'Sports'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <div class="container">
        <form>
            <table class="ui table tablet stackable">
                <th>Sport</th>
                <th>Venue</th>
                <th>Gold winner</th>
                <th>Silver winner</th>
                <th>Bronze winner</th>
                <tbody>
                <?php foreach ($this->sports as $sport):?>
                    <tr>
                        <th><?=$sport['sportName']?></th>
                        <th><?=$sport['venue']?></th>

                        <?php if($sport['winnerGold']): ?>
                            <th><?=$sport['winnerGold']?>(
                                <i class="<?php
                                $str = $sport['countryGold'];
                                $str = strtolower($str);
                                echo $str;?> flag">
                                </i><?=$sport['countryGold']?>)
                            </th>
                        <?php else: ?>
                            <th>N/A</th>
                        <?php endif ?>

                        <?php if($sport['winnerSilver']): ?>
                            <th><?=$sport['winnerSilver']?>(
                                <i class="<?php
                                $str = $sport['countrySilver'];
                                $str = strtolower($str);
                                echo $str;?> flag">
                                </i><?=$sport['countrySilver']?>)
                            </th>
                        <?php else: ?>
                            <th>N/A</th>
                        <?php endif ?>

                        <?php if($sport['winnerBronze']): ?>
                            <th><?=$sport['winnerBronze']?>(
                                <i class="<?php
                                $str = $sport['countryBronze'];
                                $str = strtolower($str);
                                echo $str;?> flag">
                                </i><?=$sport['countryBronze']?>)
                            </th>
                        <?php else: ?>
                            <th>N/A</th>
                        <?php endif ?>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </form>
    </div>
</main>
