<?php
class SearchController extends BaseController
{
  function index()
  {
    if($this->isPost)
    {
      $this->search = $_POST["search"];
      $this->searchResult = $this->model->searchNews($this->search);
    }
    else
    {
      $this->redirect("home", "index");
    }
  }
}
?>
