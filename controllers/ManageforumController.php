<?php

class ManageforumController extends BaseController
{
    public function index()
    {
        $this->posts = $this->model->getAllPosts();
    }

    public function edit(int $id)
    {
        $this->authorizeAdmin();
        $this->post = $this->model->getById($id);
        if($this->isPost) {
            $title = $_POST['title'];
            $body = $_POST['body'];
            if($this->model->edit($id,$title,$body)){
                $this->addInfoMessage("Success!!");
                $this->redirect("manageforum");
            }
            else{
                $this->addErrorMessage("Place try again!");
            }
        }
    }

    public function delete(int $id)
    {
        if ($this->model->deleteComments($id) && $this->model->delete($id)){
            $this->addInfoMessage("Success!!");
            $this->redirect("manageforum");
        }
        else{
            $this->addErrorMessage("Place try again!");
            $this->redirect("manageforum");
        }
    }
}