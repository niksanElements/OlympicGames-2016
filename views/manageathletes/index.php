<h1>Athletes Management</h1>
<a class="btn btn-lg btn-primary" href="<?=APP_ROOT?>/manageathletes/add">
  <span class="glyphicon glyphicon-plus"> Add-New</span> </a><br /><br />
<main>
  <div class="container">
    <form>
    <table class="table table-responsive">
      <tr>
        <th>ID:</th>
        <th>Name:</th>
        <th>Team or Athlete</th>
        <th>Age:</th>
        <th>Sport:</th>
        <th>Country:</th>
        <th>Actins:</th>
      </tr>
      <?php foreach($this->athletes as $athlete): ?>
        <tr>
          <th><?=$athlete["playerID"]?></th>
          <th><?=$athlete["playerName"]?></th>
          <th>
            <?php if($athlete["isTeam"] == 1): ?>
              Team
            <?php else: ?>
              Athlete
            <?php endif ?>
          </th>
          <th>
            <?php if($athlete["playerAge"] > 0): ?>
              <?=$athlete["playerAge"]?>
            <?php else: ?>
              N/A
            <?php endif ?>
          </th>
          <th><?=$athlete["sportName"]?></th>
          <th><?=$athlete["countryName"]?></th>
          <th>
            <ul class="list-group">
              <li class="list-group-item-text">
                <a class="text-success" href="<?=APP_ROOT?>/manageathletes/edit/<?=$athlete["playerID"]?>">
                  <span class="glyphicon glyphicon-edit"></span> Edit</a>
              </li>
              <li class="list-group-item-text">
                <a class="text-danger" href="<?=APP_ROOT?>/manageathletes/delete/<?=$athlete["playerID"]?>"
                   onclick="return confirm('Are you sure?')">
                  <span class="glyphicon glyphicon-minus-sign text-danger"></span> Delete</a>
              </li>
            </ul>
          </th>
        </tr>
      <?php endforeach ?>
    </table>
    <a class="btn btn-primary pull-right" href="<?=APP_ROOT?>/adminpanel" >
      <span class="glyphicon glyphicon-backward"> <b>Back</b></span></a>
    </form>
  </div>
</main>