<table>
    <tr>
        <th>
            ID:
        </th>
        <th>
            Username:
        </th>
        <th>
            Full name:
        </th>
        <th>
            E-mail:
        </th>
        <th>
            Status:
        </th>
        <th>
            Actions:
        </th>
    </tr>
    <?php foreach($this->users as $user): ?>
    <tr>
      <th>
        <?=$user["id"]?>
      </th>
      <th>
        <?=$user["username"]?>
      </th>
      <th>
        <?=$user["full_name"]?>
      </th>
      <th>
        <?=$user["email"]?>
      </th>
      <th>
        <?php if($user["status"] == "A"): ?>
        Admin
        <?php else: ?>
          User
        <?php endif ?>
      </th>
      <th>
        <a href="<?=APP_ROOT?>/manageusers/edit/<?=$user["id"]?>">Edit</a>
      </th>
    </tr>
    <?php endforeach ?>
</table>
