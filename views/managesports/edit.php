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
      <th colspan="2">
        <input type="submit" name="submit-edit" value="Save" />
      </th>
    </tr>
  </table>
</form>
