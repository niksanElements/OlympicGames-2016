<h3>Manage sports</h3>
<a href="<?=APP_ROOT?>/managesports/add">Add new sport</a><br /><br />
<table>
  <tr>
    <th>
      ID:
    </th>
    <th>
      Sport:
    </th>
    <th>
      Venue:
    </th>
    <th>
      Actions:
    </th>
  </tr>
  <?php foreach($this->sports as $sport): ?>
    <tr>
      <th>
        <?=$sport["id"]?>
      </th>
      <th>
        <?=$sport["name"]?>
      </th>
      <th>
        <?=$sport["venue"]?>
      </th>
      <th>
        <a href="<?=APP_ROOT?>/managesports/edit/<?=$sport["id"]?>">Edit</a>
        &nbsp;<a href="<?=APP_ROOT?>/managesports/delete/<?=$sport["id"]?>" onclick="return confirm('Are you sure?')">Delete</a>
      </th>
    </tr>
  <?php endforeach ?>
</table>
