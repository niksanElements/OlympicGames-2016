<h3>Edit olympic sport venues</h3>
<form method="post">
  <table>
    <tr>
      <th>
        ID:
      </th>
      <th>
        <?=$this->venues["id"]?>
      </th>
    </tr>
    <tr>
      <th>
        Venue name:
      </th>
      <th>
        <input type="text" name="venue_name" value="<?=$this->venues["venue_name"]?>" />
      </th>
      </tr>
    <tr>
      <th>
        Sports played:
      </th>
      <th>
        <input type="text" name="sport" value="<?=$this->venues["sport"]?>" />
      </th>
    </tr>
    <tr>
      <th>
        Venue capacity:
      </th>
      <th>
        <input type="number" name="capacity" value="<?=$this->venues["capacity"]?>" />
      </th>
    </tr>
    <tr>
      <th colspan="2">
        <input type="submit" name="submit-edit" value="Save" />
      </th>
    </tr>
  </table>
</form>
