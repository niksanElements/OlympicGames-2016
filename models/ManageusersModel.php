<?php
/**
 * Created by PhpStorm.
 * User: Chelikov
 * Date: 18.8.2016 г.
 * Time: 19:31 ч.
 */

class ManageusersModel extends BaseModel
{
    public function getAllUsers()
    {
        $statement = self::$db -> query("SELECT * FROM users");
        $result = $statement -> fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    public function getUser($id) : array
    {
        $statement = self::$db->prepare(
            "SELECT * FROM users WHERE id = ?");
        $statement ->bind_param("i", $id);
        $statement->execute();
        $result = $statement ->get_result()->fetch_assoc();
        return $result;
    }
}