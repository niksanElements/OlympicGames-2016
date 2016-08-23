<?php
class ManageathletesModel extends BaseModel
{
  public function getCountries() : array
  {
    $statement = self::$db->query("SELECT id, full_name FROM countries");
    $result = $statement->fetch_all(MYSQLI_ASSOC);
    return $result;
  }

  public function getSports() : array
  {
    $statement = self::$db->query("SELECT id, name FROM sports");
    $result = $statement->fetch_all(MYSQLI_ASSOC);
    return $result;
  }

  public function getAthletes() : array
  {
    $statement = self::$db->query("SELECT players.id AS playerID, players.full_name AS playerName,
      players.age AS playerAge,
      sports.name AS sportName, countries.full_name AS countryName
      FROM players
      JOIN sports ON players.sports_id = sports.id
      JOIN players_has_countries ON players.id = players_has_countries.players_id
      JOIN countries ON players_has_countries.countries_id = countries.id");
    $result = $statement->fetch_all(MYSQLI_ASSOC);
    return $result;
  }

  public function addAthlete($name, $age, $sportID, $countryID) : bool
  {
    $name = htmlspecialchars($name);
    $age = htmlspecialchars($age);
    $sportID = htmlspecialchars($sportID);
    $countryID = htmlspecialchars($countryID);

    $statement = self::$db->prepare("INSERT INTO players (full_name, age, sports_id) VALUES (?, ?, ?)");
    $statement->bind_param("sii", $name, $age, $sportID);
    $statement->execute();
    if($statement->affected_rows == 1)
    {
      $playerID = self::$db->query("SELECT LAST_INSERT_ID()")->fetch_row()[0];
      $statement = self::$db->prepare("INSERT INTO players_has_countries (players_id, countries_id)
      VALUES (?, ?)");
      $statement->bind_param("ii", $playerID, $countryID);
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
    else
    {
      return false;
    }
  }
}
?>
