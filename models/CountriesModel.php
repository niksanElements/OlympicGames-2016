<?php

class CountriesModel extends BaseModel
{
    public function getCountries() : array
    {
        $statement  = self::$db->query(
            "SELECT * FROM countries");
        return  $statement->fetch_all(MYSQLI_ASSOC);
    }
}