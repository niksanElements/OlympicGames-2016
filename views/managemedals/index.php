<h3>Manage medals list</h3>
<a href="<?=APP_ROOT?>/managemedals/add">Add new medal</a><br /><br />
<table>
  <tr>
    <th>
      ID:
    </th>
    <th>
      Medal:
    </th>
    <th>
      Type:
    </th>
    <th>
      Actions:
    </th>
  </tr>
  <?php foreach($this->medals as $medal): ?>
    <tr>
      <th>
        <?=$medal["id"]?>
      </th>
      <th>
        <?=$medal["name"]?>
      </th>
      <th>
       <?php if ($medal["type"] == 1): ?>
        Gold
      <?php elseif ($medal["type"] == 2):?>
        Silver
        <?php else:?>
         Bronze
        <?php endif?>
      </th>
      <th>
        <a href="<?=APP_ROOT?>/managemedals/edit/<?=$medal["id"]?>">Edit</a>
        &nbsp;<a href="<?=APP_ROOT?>/managemedals/delete/<?=$medal["id"]?>" onclick="return confirm('Are you sure?')">Delete</a>
      </th>
    </tr>
  <?php endforeach ?>
</table>
