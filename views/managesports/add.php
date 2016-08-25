<h3>Add new sport</h3>
<form method="post">
  <table>
    <tr>
      <th>
        Sport:
      </th>
      <th>
        <input type="text" name="name" />
      </th>
    </tr>
    <tr>
      <th>
        Venue:
      </th>
      <th>
        <select name="venueID">
          <?php foreach($this->venues as $venue): ?>
            <option value="<?=$venue["id"]?>"><?=$venue["venue_name"]?></option>
          <?php endforeach ?>
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
