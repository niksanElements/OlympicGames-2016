<h3>Athletes</h3>
<table>
  <tr>
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
  </tr>
  <?php foreach($this->athletes as $athlete): ?>
    <tr>
      <th>
        <?=$athlete["playerName"]?>
      </th>
      <th>
        <?=$athlete["playerAge"]?>
      </th>
      <th>
        <?=$athlete["sportName"]?>
      </th>
      <th>
        <?=$athlete["countryName"]?>
      </th>
      <th>
        <?php if($athlete["medalType"] == 1): ?>
          Gold
        <?php elseif($athlete["medalType"] == 2): ?>
          Silver
        <?php elseif($athlete["medalType"] == 3): ?>
          Bronze
        <?php else: ?>
          None
        <?php endif ?>
      </th>
    </tr>
  <?php endforeach ?>
</table>
