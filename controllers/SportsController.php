<?php
class SportsController extends BaseController
{
  function index()
  {
    $this->sports = $this->model->getAllSports();
  }
}
?>
