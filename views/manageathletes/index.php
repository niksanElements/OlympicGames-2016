<h3>Athletes management</h3>
<a href="<?=APP_ROOT?>/manageathletes/add">Add new athlete</a><br /><br />
<table>
  <tr>
    <th>
      ID:
    </th>
    <th>
      Name:
    </th>
    <th>
      Team or Athlete
    </th>
    <th>
      Age:
    </th>
    <th>
      Sport:
    </th>
    <th>
      Country:
    </th>
    <th>
      Actins:
    </th>
  </tr>
  <?php foreach($this->athletes as $athlete): ?>
    <tr>
      <th>
        <?=$athlete["playerID"]?>
      </th>
      <th>
        <?=$athlete["playerName"]?>
      </th>
      <th>
        <?php if($athlete["isTeam"] == 1): ?>
          Team
        <?php else: ?>
          Athlete
        <?php endif ?>
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
        <a href="<?=APP_ROOT?>/manageathletes/edit/<?=$athlete["playerID"]?>">Edit</a>
        &nbsp;<a href="<?=APP_ROOT?>/manageathletes/delete/<?=$athlete["playerID"]?>" onclick="return confirm('Are you sure?')">Delete</a>
      </th>
    </tr>
  <?php endforeach ?>
</table>
