<h3>Manage team contact info</h3>
<a href="<?=APP_ROOT?>/managecontactus/add">Add new team member</a><br /><br />
<table>
  <tr>
    <th>
      ID:
    </th>
    <th>
      Venue Name:
    </th>
    <th>
      Sports:
    </th>
    <th>
      Capacity:
    </th>
    <th>
      Actions:
    </th>
  </tr>
  <?php foreach($this->venues as $venue): ?>
    <tr>
      <th>
        <?=$venue["id"]?>
      </th>
      <th>
        <?=$venue["venue_name"]?>
      </th>
      <th>
        <?=$venue["sport"]?>
      </th>
      <th>
        <?=$venue["capacity"]?>
      </th>
      <th>
        <a href="<?=APP_ROOT?>/managevenues/edit/<?=$venue["id"]?>">Edit</a>
        &nbsp;<a href="<?=APP_ROOT?>/managevenues/delete/<?=$venue["id"]?>" onclick="return confirm('Are you sure?')">Delete</a>
      </th>
    </tr>
  <?php endforeach ?>
</table>
