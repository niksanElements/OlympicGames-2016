<h3>Edit medals</h3>
<form method="post">
  <table>
    <tr>
      <th>
        ID:
      </th>
      <th>
        <?=$this->medals["id"]?>
      </th>
    </tr>
    <tr>
      <th>
        Medal name:
      </th>
      <th>
        <input type="text" name="name" value="<?=$this->medals["name"]?>" />
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
        <input type="submit" name="submit-edit" value="Save" />
      </th>
    </tr>
  </table>
</form>
