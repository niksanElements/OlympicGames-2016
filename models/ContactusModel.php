<?php

class ContactusModel extends BaseModel
{
    public function getContactus() : array
    {
        $statement  = self::$db->query(
            "SELECT * FROM contactus");
        return  $statement->fetch_all(MYSQLI_ASSOC);
    }

    public function create(string $name, string $body,int $age,string $education,string $work,string $passion) : bool{
        $statement = self::$db->prepare(
            "INSERT INTO contactus (name, body, age , education, work, passion) VALUES (?,?,?,?,?,?)");
        $statement->bind_param("ssisss",$name,$body,$age,$education,$work,$passion);
        $statement->execute();
        return $statement->affected_rows == 1;
    }

    public function getById(int $id) :array
    {
        $statement = self::$db->prepare(
            "SELECT contactus.id, name, body, age, education, work , passion
            FROM contactus 
            WHERE contactus.id = ?");
        $statement->bind_param("i",$id);
        $statement->execute();
        $result = $statement->get_result()->fetch_assoc();
        return $result;
    }
}