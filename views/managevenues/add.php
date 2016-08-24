<h3>Add new olympic sport venue</h3>
<form method="post">
  <table>
    <tr>
      <th>
        Venue name:
      </th>
      <th>
        <input type="text" name="venue_name" />
      </th>
    </tr>
    <tr>
      <th>
        Sports played:
      </th>
      <th>
        <input type="text" name="sport" />
      </th>
    </tr>
    <tr>
      <th>
        Venue capacity:
      </th>
      <th>
        <input type="number" name="capacity" />
      </th>
    </tr>
    <tr>
      <th>
        Latitude:
      </th>
      <th>
        <input type="number" step="0.0000001" name="lat" />
      </th>
    </tr>
    <tr>
      <th>
        Longitude:
      </th>
      <th>
        <input type="number" step="0.00000001" name="lon" />
      </th>
    </tr>
    <tr>
      <th colspan="2">
        <input type="submit" name="submit-add" value="Add" />
      </th>
    </tr>
  </table>
</form>
