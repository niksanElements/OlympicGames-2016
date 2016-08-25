<h3>Add new medal</h3>
<form method="post">
  <table>
    <tr>
      <th>
        Medal name:
      </th>
      <th>
        <input type="text" name="name" />
      </th>
    </tr>
    <tr>
      <th>
        Winner:
      </th>
      <th>
        <select name="playerID">
          <?php foreach($this->athletes as $athlete): ?>
            <option value="<?=$athlete["id"]?>"><?=$athlete["full_name"]?></option>
          <?php endforeach ?>
        </select>
      </th>
    </tr>
    <tr>
      <th>
        Medal type:
      </th>
      <th>
        <select name="type">
          <option value="1">Gold</option>
          <option value="2">Silver</option>
          <option value="3">Bronze</option>
        </select>
      </th>
    </tr>
    <tr>
      <th colspan="2">
        <input type="submit" name="submit-add" value="Add" />
      </th>
    </tr>
  </table>
</form>
