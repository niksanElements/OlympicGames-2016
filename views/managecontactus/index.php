<h3>Manage team contact info</h3>
<a href="<?=APP_ROOT?>/managecontactus/add">Add new team member</a><br /><br />
<table>
  <tr>
    <th>
      ID:
    </th>
    <th>
      Team Member Name:
    </th>
    <th>
      Age:
    </th>
    <th>
      Comments:
    </th>
    <th>
      Education:
    </th>
    <th>
      Passion:
    </th>
    <th>
      Work:
    </th>
    <th>
      Actions:
    </th>
  </tr>
  <?php foreach($this->contactus as $contact): ?>
    <tr>
      <th>
        <?=$contact["id"]?>
      </th>
      <th>
        <?=$contact["name"]?>
      </th>
      <th>
        <?=$contact["age"]?>
      </th>
      <th>
        <?=$contact["body"]?>
      </th>
      <th>
        <?=$contact["education"]?>
      </th>
      <th>
        <?=$contact["passion"]?>
      </th>
      <th>
        <?=$contact["work"]?>
      </th>
      <th>
        <a href="<?=APP_ROOT?>/managecontactus/edit/<?=$contact["id"]?>">Edit</a>
        &nbsp;<a href="<?=APP_ROOT?>/managecontactus/delete/<?=$contact["id"]?>" onclick="return confirm('Are you sure?')">Delete</a>
      </th>
    </tr>
  <?php endforeach ?>
</table>
