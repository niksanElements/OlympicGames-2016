<h3>Edit sport</h3>
<form method="post">
  <table>
    <tr>
      <th>
        ID:
      </th>
      <th>
        <?=$this->sport["id"]?>
      </th>
    </tr>
    <tr>
      <th>
        Sport:
      </th>
      <th>
        <input type="text" name="name" value="<?=$this->sport["name"]?>" />
      </th>
    </tr>
    <tr>
      <th>
        Venue:
      </th>
      <th>
        <select name="venueID">
          <?php foreach($this->venues as $venue): ?>
            <?php if($venue["id"] == $this->sport["venue"]): ?>
              <option value="<?=$venue["id"]?>" selected="selected"><?=$venue["venue_name"]?></option>
            <?php else: ?>
              <option value="<?=$venue["id"]?>"><?=$venue["venue_name"]?></option>
            <?php endif ?>
          <?php endforeach ?>
        </select>
      </th>
    </tr>
    <tr>
      <th colspan="2">
        <input type="submit" name="submit-edit" value="Save" />
      </th>
    </tr>
  </table>
</form>
