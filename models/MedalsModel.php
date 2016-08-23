<?php

class MedalsModel extends BaseModel
{
    public function getMedals() : array
    {
        $statement  = self::$db->query(
            "SELECT * FROM medals");
        return  $statement->fetch_all(MYSQLI_ASSOC);
    }
}