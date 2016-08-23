<?php
class ManagevenuesController extends BaseController
{
  function index()
  {
    $this->authorizeAdmin();
    $this->venues = $this->model->getAllVenues();
  }

  function add()
  {
    $this->authorizeAdmin();
    if($this->isPost)
    {
      $venue_name = $_POST["venue_name"];
      if (strlen($venue_name) < 2 || strlen ($venue_name)> 100) {
          $this->setValidationError("venues", "Invalid venue name");
      }
      $sport = $_POST["sport"];
      if (strlen($sport) < 2 || strlen ($sport)> 100) {
        $this->setValidationError("venues", "Invalid venue sport");
      }
      $capacity = $_POST["capacity"];
      if ($capacity < 0 and $capacity > 1000000) {
        $this->setValidationError("venues", "Invalid venue capacity");
      }
      if($this->formValid())
      {
        $result = $this->model->addVenue($venue_name, $sport, $capacity);
        if($result === true)
        {
          $this->addInfoMessage("Add successful.");
          $this->redirect("managevenues", "index");
        }
        else
        {
          $this->addErrorMessage("Add failed. Try again.");
        }
      }
    }
  }

  function edit($id)
  {
    $this->authorizeAdmin();

    if($this->isPost)
    {
      $venue_name = $_POST["venue_name"];
      if (strlen($venue_name) < 2 || strlen ($venue_name)> 100) {
        $this->setValidationError("venues", "Invalid venue name");
      }
      $sport = $_POST["sport"];
      if (strlen($sport) < 2 || strlen ($sport)> 100) {
        $this->setValidationError("venues", "Invalid venue sport");
      }
      $capacity = $_POST["capacity"];
      if ($capacity < 0 || $capacity > 1000000) {
        $this->setValidationError("venues", "Invalid venue capacity");
      }

      if($this->formValid())
      {
        $result = $this->model->editVenue($id, $venue_name, $sport, $capacity);
        if($result === true)
        {
          $this->addInfoMessage("Edit successful.");
          $this->redirect("managevenues", "index");
        }
        else
        {
          $this->addErrorMessage("Edit failed. Try again.");
        }
      }
    }

    $this->venues = $this->model->getVenue($id);
  }

  function delete($id)
  {
    $this->authorizeAdmin();
    $result = $this->model->deleteVenue($id);
    if($result === true)
    {
      $this->addInfoMessage("Delete successful.");
      $this->redirect("managevenues", "index");
    }
    else
    {
      $this->addErrorMessage("Delete failed. Try again.");
    }
  }
}
?>