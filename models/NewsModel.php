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

}