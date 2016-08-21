<?php
class ManagemedalsModel extends BaseModel
{
  public function getAllMedals() : array
  {
    $statement = self::$db->query("SELECT * FROM medals");
    $result = $statement -> fetch_all(MYSQLI_ASSOC);
    return $result;
  }

  public function addMedal($name, $type) : bool
  {
    $name = htmlspecialchars($name);
    $statement = self::$db->prepare("INSERT INTO medals (name, type ) VALUES (?,?)");
    $statement->bind_param("ss", $name, $type);
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

  public function getMedal($id) : array
  {
    $statement = self::$db->prepare("SELECT * FROM medals WHERE id = ?");
    $statement->bind_param("i", $id);
    $statement->execute();
    $result = $statement ->get_result()->fetch_assoc();
    return $result;
  }

  public function editMedal($id, $name, $type) : bool
  {
    $name = htmlspecialchars($name, $type);
    $statement = self::$db->prepare("UPDATE medals SET name = ?, type =? WHERE id = ?");
    $statement->bind_param("iss",$id, $name, $type);
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

  public function deleteMedal($id) : bool
  {
    $statement = self::$db->prepare("DELETE FROM medals WHERE id = ?");
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
