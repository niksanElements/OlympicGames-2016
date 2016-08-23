<?php
class SearchModel extends BaseModel
{
  public function searchNews($search) : array
  {
    $search = "%" . htmlspecialchars($search) . "%";
    $statement = self::$db->prepare("SELECT * FROM news WHERE title LIKE ? OR body LIKE ?");
    $statement->bind_param("ss", $search, $search);
    $statement->execute();
    $result = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
    return $result;
  }
}
?>
