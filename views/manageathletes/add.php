<h3>Add athlete</h3>
<form method="post">
  <table>
    <tr>
        <th colspan="2">
        <input type="radio" name="isTeam" value="0" checked="checked" /> Add an athlete
        <input type="radio" name="isTeam" value="1" /> Add team<br>
        </th>
      </tr>
      <th>
        Name:
      </th>
      <th>
        <input type="text" name="full_name" />
      </th>
    </tr>
    <tr>
      <th>
        Age:
      </th>
      <th>
        <input type="number" name="age" />
      </th>
    </tr>
    <tr>
      <th>
        Sport:
      </th>
      <th>
        <select name="sportID">
          <?php foreach($this->sports as $sport): ?>
            <option value="<?=$sport["id"]?>"><?=$sport["name"]?></option>
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
            <option value="<?=$country["id"]?>"><?=$country["full_name"]?></option>
          <?php endforeach ?>
        </select>
      </th>
    </tr>
    <tr>
      <th colspan="2">
        <input type="submit" name="submit-add" value="Save" />
      </th>
    </tr>
  </table>
</form>
