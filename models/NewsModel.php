<?php

/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 8/9/2016
 * Time: 7:29 PM
 */
class NewsModel extends BaseModel
{
    public function getLastNews(int $maxCount = 5) : array
    {
        $statement  = self::$db->query(
            "SELECT news.id, title, body, date, full_name
            FROM news LEFT JOIN users on news.users_id = users.id
            ORDER BY date DESC  LIMIT $maxCount");
        return  $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function getById(int $id){
        $statement = self::$db->prepare(
            "SELECT news.id, title, body, date, full_name
            FROM news LEFT JOIN users on news.users_id = users.id
            WHERE news.id = ?"
        );
        $statement->bind_param("i",$id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }
}