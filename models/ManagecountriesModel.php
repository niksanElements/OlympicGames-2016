<?php
class ManagecountriesModel extends BaseModel
{
    public function getCountries() : array
    {
        $statement = self::$db->query("SELECT * FROM countries");
        $result = $statement->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    public function addCountry($fullName, $shortName) : bool
    {
        $fullName = htmlspecialchars($fullName);
        $shortName = htmlspecialchars($shortName);
        $statement = self::$db->prepare("INSERT INTO countries (full_name, short_name) VALUES (?, ?)");
        $statement->bind_param("ss", $fullName, $shortName);
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