<?php
class ManagevenuesModel extends BaseModel
{
  public function getAllVenues() : array
  {
    $statement = self::$db->query("SELECT * FROM venues");
    $result = $statement -> fetch_all(MYSQLI_ASSOC);
    return $result;
  }

  public function addVenue($venue_name, $sport, $capacity) : bool
  {
    $venue_name = htmlspecialchars($venue_name);
    $sport = htmlspecialchars($sport);
    $capacity = htmlspecialchars($capacity);
    $statement = self::$db->prepare("INSERT INTO venues (venue_name, sport, capacity ) VALUES (?,?,?)");
    $statement->bind_param("ssi", $venue_name, $sport, $capacity);
    $statement->execute();
    if(!$statement->errno)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function getVenue($id) : array
  {
    $statement = self::$db->prepare("SELECT * FROM venues WHERE id = ?");
    $statement->bind_param("i", $id);
    $statement->execute();
    $result = $statement ->get_result()->fetch_assoc();
    return $result;
  }

  public function editVenue($id, $venue_name, $sport, $capacity) : bool
  {
    $venue_name = htmlspecialchars($venue_name);
    $sport = htmlspecialchars($sport);
    $capacity = htmlspecialchars($capacity);
    
    $statement = self::$db->prepare("UPDATE venues SET venue_name = ?, sport = ?, capacity = ?
      WHERE id = ?");
    $statement->bind_param("sssi", $venue_name, $sport, $capacity, $id);
    $statement->execute();
      if(!$statement->errno)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function deleteVenue($id) : bool
  {
    $statement = self::$db->prepare("DELETE FROM venues WHERE id = ?");
    $statement->bind_param("i", $id);
    $statement->execute();
    if(!$statement->errno)
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
