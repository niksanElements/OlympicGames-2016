<?php $this->title = 'athletes'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
    <table class="table table-strip table-inverse">
        <thead>
          <th>
            <a href="<?=APP_ROOT?>/athletes/index/athleteAsc">/\</a>
            &nbsp;<a href="<?=APP_ROOT?>/athletes/index/athleteDesc">\/</a>
            &nbsp;Athlethe:
          </th>
          <th>
            <a href="<?=APP_ROOT?>/athletes/index/ageAsc">/\</a>
            &nbsp;<a href="<?=APP_ROOT?>/athletes/index/ageDesc">\/</a>
            &nbsp;Age:
          </th>
          <th>
            <a href="<?=APP_ROOT?>/athletes/index/sportAsc">/\</a>
            &nbsp;<a href="<?=APP_ROOT?>/athletes/index/sportDesc">\/</a>
            &nbsp;Sport:
          </th>
          <th>
            <a href="<?=APP_ROOT?>/athletes/index/countryAsc">/\</a>
            &nbsp;<a href="<?=APP_ROOT?>/athletes/index/countryDesc">\/</a>
            &nbsp;Country:
          </th>
          <th>
            <a href="<?=APP_ROOT?>/athletes/index/medalAsc">/\</a>
            &nbsp;<a href="<?=APP_ROOT?>/athletes/index/medalDesc">\/</a>
            &nbsp;Medal:
          </th>
        </thead>
        <tbody>
          <?php foreach($this->athletes as $athlete): ?>
            <tr>
              <td>
                <?=$athlete["playerName"]?>
              </td>
              <td>
                <?php if($athlete["playerAge"] > 0): ?>
                  <?=$athlete["playerAge"]?>
                <?php else: ?>
                  N/A
                <?php endif ?>
              </td>
              <td>
                <?=$athlete["sportName"]?>
              </td>
              <td>
                <?=$athlete["countryName"]?>
              </td>
              <td>
                <?php if($athlete["medalType"] == 1): ?>
                  Gold
                <?php elseif($athlete["medalType"] == 2): ?>
                  Silver
                <?php elseif($athlete["medalType"] == 3): ?>
                  Bronze
                <?php else: ?>
                  None
                <?php endif ?>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
    </table>
</main>
