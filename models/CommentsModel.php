<?php
class CommentsModel extends BaseModel
{
    public function addNewsComment($msg,int $newsID,int $userID = null) : bool
    {
        $comment = htmlspecialchars($msg);
        $statement = self::$db->prepare(
            "INSERT INTO news_comments(body,news_id,users_id) VALUES(?,?,?)"
        );
        $statement->bind_param("sii",$comment,$newsID,$userID);
        $statement->execute();
        return $statement->affected_rows == 1;
    }
    public  function  getNewsComments(int $newsId) : array
    {
        $statement  = self::$db->query(
            "SELECT  body, users_id, date
            FROM news_comments WHERE news_id = $newsId
            ORDER BY date DESC");
        return  $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function addPostComment($msg,int $postID,int $userID = null) : bool
    {
        $comment = htmlspecialchars($msg);
        $statement = self::$db->prepare(
            "INSERT INTO post_comments(body,posts_id,users_id) VALUES(?,?,?)"
        );
        $statement->bind_param("sii",$comment,$postID,$userID);
        $statement->execute();
        return $statement->affected_rows == 1;
    }
    public  function  getPostComments(int $newsId) : array
    {
        $statement  = self::$db->query(
            "SELECT  body, users_id, date
            FROM post_comments WHERE posts_id = $newsId
            ORDER BY date DESC");
        return  $statement->fetch_all(MYSQLI_ASSOC);
    }

}