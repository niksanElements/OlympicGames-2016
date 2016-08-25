<?php $this->title = 'Sports'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <table class="table table-strip table-inverse">
        <thead>
          <th>Sport</th>
          <th>Venue</th>
          <th>Gold winner</th>
          <th>Silver winner</th>
          <th>Bronze winner</th>
        </thead>
        <tbody>
        <?php foreach ($this->sports as $sport):?>
          <tr>
              <td><?=$sport['sportName']?></td>
              <td><?=$sport['venue']?></td>
              <?php if($sport['winnerGold']): ?>
                <td><?=$sport['winnerGold']?> (<?=$sport['countryGold']?>)</td>
              <?php else: ?>
                <td>N/A</td>
              <?php endif ?>
              <?php if($sport['winnerSilver']): ?>
                <td><?=$sport['winnerSilver']?> (<?=$sport['countrySilver']?>)</td>
              <?php else: ?>
                <td>N/A</td>
              <?php endif ?>
              <?php if($sport['winnerBronze']): ?>
                <td><?=$sport['winnerBronze']?> (<?=$sport['countryBronze']?>)</td>
              <?php else: ?>
                <td>N/A</td>
              <?php endif ?>
          </tr>
        <?php endforeach ?>
        </tbody>
</table>
</main>
