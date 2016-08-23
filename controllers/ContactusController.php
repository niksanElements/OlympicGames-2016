<?php

class ContactusController extends BaseController
{    public function index()
    {
        $this->contactus = $this->model->getContactus();
    }
    
    public function create()
    {
        if($this->isPost){
            $name=$_POST['name'];
            $body = $_POST['body'];
            $age=$_POST['age'];
            $education=$_POST['education'];
            $work=$_POST['work'];
            $passion=$_POST['passion'];

            if($this->model->create($name,$body,$age,$education,$work,$passion,$_SESSION['userID'])) {

                $this->addInfoMessage('Successful create!');
                $this->redirect("contactus");
            }
        }
    }

    public function profil(int $id)
    {
        $contactus = $this->model->getByID($id);
        if(!$contactus){
            $this->addErrorMessage("Can't find this page.");
            $this->redirect("contactus");
        }
        $this->contactus = $contactus;
    }
    public function edit(int $id)
    {
        $this->contactus = $this->model->getById($id);
        if($this->isPost){
            if (isset($_POST["username"]) && isset($_POST["body"]) && isset($_POST["age"])
            && isset($_POST["education"]) && isset($_POST["work"]) && isset($_POST["passion"])) {

                $name = $_POST['name'];
                $body = $_POST['body'];
                $age = $_POST['age'];
                $education = $_POST['education'];
                $work = $_POST['work'];
                $passion = $_POST['passion'];


                if ($this->model->edit($id ,$name, $body, $age, $education, $work, $passion)) {

                    $this->addInfoMessage('Successful change!');
                    $this->redirect("contactus");
                }
            }
        }
    }
}