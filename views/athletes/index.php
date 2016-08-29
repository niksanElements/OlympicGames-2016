<?php $this->title = 'Athletes'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
  <div class="container">
    <form>
    <table class="ui table tablet stackable">
          <th>
            <a href="<?=APP_ROOT?>/athletes/index/athleteAsc"></a>
            &nbsp;<a href="<?=APP_ROOT?>/athletes/index/athleteDesc"></a>
            &nbsp;Athlethe:
          </th>
          <th>
            <a href="<?=APP_ROOT?>/athletes/index/ageAsc"></a>
            &nbsp;<a href="<?=APP_ROOT?>/athletes/index/ageDesc"></a>
            &nbsp;Age:
          </th>
          <th>
            <a href="<?=APP_ROOT?>/athletes/index/sportAsc"></a>
            &nbsp;<a href="<?=APP_ROOT?>/athletes/index/sportDesc"></a>
            &nbsp;Sport:
          </th>
          <th>
            <a href="<?=APP_ROOT?>/athletes/index/countryAsc"></a>
            &nbsp;<a href="<?=APP_ROOT?>/athletes/index/countryDesc"></a>
            &nbsp;Country:
          </th>
          <th>
            <a href="<?=APP_ROOT?>/athletes/index/medalAsc"></a>
            &nbsp;<a href="<?=APP_ROOT?>/athletes/index/medalDesc"></a>
            &nbsp;Medal:
          </th>
        <tbody>
          <?php foreach($this->athletes as $athlete): ?>
            <tr>
              <th>
                <?=$athlete["playerName"]?>
              </th>
              <th>
                <?php if($athlete["playerAge"] > 0): ?>
                  <?=$athlete["playerAge"]?>
                <?php else: ?>
                  N/A
                <?php endif ?>
              </th>
              <th>
                <?=$athlete["sportName"]?>
              </th>
              <th>
                <i class="<?php
                $str = $athlete['countryName'];
                $str = strtolower($str);
                echo $str;
                ?> flag"></i>
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
        </tbody>
    </table>
    </form>
  </div>
</main>
