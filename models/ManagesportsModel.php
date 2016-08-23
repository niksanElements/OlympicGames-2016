<?php
class ManagesportsModel extends BaseModel
{
  public function getAllSports() : array
  {
    $statement = self::$db->query("SELECT * FROM sports");
    $result = $statement -> fetch_all(MYSQLI_ASSOC);
    return $result;
  }

  public function addSport($name) : bool
  {
    $name = htmlspecialchars($name);
    $statement = self::$db->prepare("INSERT INTO sports (name) VALUES (?)");
    $statement->bind_param("s", $name);
    $statement->execute();
    if($statement->affected_rows == 1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function getSport($id) : array
  {
    $statement = self::$db->prepare("SELECT * FROM sports WHERE id = ?");
    $statement->bind_param("i", $id);
    $statement->execute();
    $result = $statement ->get_result()->fetch_assoc();
    return $result;
  }

  public function editSport($id, $name) : bool
  {
    $name = htmlspecialchars($name);
    $statement = self::$db->prepare("UPDATE sports SET name = ? WHERE id = ?");
    $statement->bind_param("si", $name, $id);
    $statement->execute();
    if($statement->affected_rows == 1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function deleteSport($id) : bool
  {
    $statement = self::$db->prepare("DELETE FROM sports WHERE id = ?");
    $statement->bind_param("i", $id);
    $statement->execute();
    if($statement->affected_rows == 1)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
}
?>
