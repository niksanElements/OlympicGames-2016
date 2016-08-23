<?php
class ManageathletesController extends BaseController
{
  function index()
  {
    $this->authorizeAdmin();

    $this->athletes = $this->model->getAthletes();
  }

  function add()
  {
    $this->authorizeAdmin();

    if($this->isPost)
    {
      $name = $_POST["name"];
      if (strlen($name) < 2 || strlen ($name)> 200) {
          $this->setValidationError("name", "Invalid name");
      }
      $age = $_POST["age"];
      $sportID = $_POST["sportID"];
      $countryID = $_POST["countryID"];

      if($this->formValid())
      {
        $result = $this->model->addAthlete($name, $age, $sportID, $countryID);
        if($result === true)
        {
          $this -> addInfoMessage("Add successful.");
          $this -> redirect('manageathletes', 'index');
        }
        else
        {
          $this->addErrorMessage("Add failed. Try again.");
        }
      }
    }

    $this->countries = $this->model->getCountries();
    $this->sports = $this->model->getSports();
  }
}
?>
