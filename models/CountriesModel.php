<?php

class CountriesModel extends BaseModel
{
    public function getCountries() : array
    {
        $statement  = self::$db->query(
            "SELECT countries.short_name AS countryShort, countries.full_name AS countryFull,
            COUNT(DISTINCT medals.id) AS medalsTotal, 
            COUNT(DISTINCT(CASE WHEN medals.type = 1 THEN medals.id END)) AS medalsGold,
            COUNT(DISTINCT(CASE WHEN medals.type = 2 THEN medals.id END)) AS medalsSilver,
            COUNT(DISTINCT(CASE WHEN medals.type = 3 THEN medals.id END)) AS medalsBronze,
            COUNT(DISTINCT players_has_countries.players_id) AS playersTotal
            FROM countries
            LEFT JOIN medals_has_countries ON medals_has_countries.countries_id = countries.id
            LEFT JOIN medals ON medals.id = medals_has_countries.medals_id
            RIGHT JOIN players_has_countries ON players_has_countries.countries_id = countries.id
            GROUP BY countries.full_name
            ORDER BY countries.full_name ASC");
        return  $statement->fetch_all(MYSQLI_ASSOC);
    }
}
