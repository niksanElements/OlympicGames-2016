<?php


class NewsController extends BaseController
{
    public function index()
    {
        $this->news = $this->model->getLastNews(4);
    }

    public function read(int $id)
    {
        $news = $this->model->getByID($id);
        if(!$news){
            $this->addErrorMessage("Can't find this page.");
            $this->redirect("news");
        }
        $this->news = $news;
    }
}