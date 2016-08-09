<?php
/**
 * Created by PhpStorm.
 * User: Tani
 * Date: 06.08.2016 г.
 * Time: 13:56 ч.
 */
class UserModel extends BaseModel
{
    public function registration(
        string $username, string $password, string $fullName, string $email){
        $password_hash = password_hash($password,PASSWORD_DEFAULT);

        $username = htmlspecialchars($username);
        $fullName = htmlspecialchars($fullName);
        $email = htmlspecialchars($email);

        $statement = self:: $db->prepare(
            "INSERT INTO users (username, password_hash, fullName, email) values (?,?,?,?)");
        $statement ->bind_param("sss", $username, $password_hash, $fullName, $email);
        $statement->execute();
        if ($statement->affected_rows !=1)
            return false;
        $userID = self::$db -> query("select last_insert_id()")->fetch_row()[0];
        return $userID;
    }
    public function login(string $username, string $password)
    {
    $statement = self::$db->prepare(
    "SELECT id, password_hash FROM users WHERE username = ?");
        $statement ->bind_param("s", $username);
        $statement->execute();
        $result = $statement ->get_result()->fetch_assoc();
        if (password_verify($password, $result['password_hash']))
            return $result['id'];
        return false;
    }

}

