<h3>Edit athlete</h3>
<form method="post">
  <table>
    <tr>
      <th>
        Athlete's name:
      </th>
      <th>
        <input type="text" name="full_name" value="<?=$this->athlete["playerName"]?>" />
      </th>
    </tr>
    <tr>
      <th>
        Age:
      </th>
      <th>
        <input type="number" name="age" value="<?=$this->athlete["playerAge"]?>" />
      </th>
    </tr>
    <tr>
      <th>
        Sport:
      </th>
      <th>
        <select name="sportID">
          <?php foreach($this->sports as $sport): ?>
            <?php if($this->athlete["sportID"] == $sport["id"]): ?>
              <option value="<?=$sport["id"]?>" selected="selected"><?=$sport["name"]?></option>
            <?php else: ?>
              <option value="<?=$sport["id"]?>"><?=$sport["name"]?></option>
            <?php endif ?>
          <?php endforeach ?>
        </select>
      </th>
    </tr>
    <tr>
      <th>
        Country:
      </th>
      <th>
        <select name="countryID">
          <?php foreach($this->countries as $country): ?>
            <?php if($this->athlete["countryID"] == $country["id"]): ?>
              <option value="<?=$country["id"]?>" selected="selected"><?=$country["full_name"]?></option>
            <?php else: ?>
              <option value="<?=$country["id"]?>"><?=$country["full_name"]?></option>
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