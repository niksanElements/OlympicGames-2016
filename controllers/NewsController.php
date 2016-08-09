<?php


class NewsController extends BaseController
{
    public function index()
    {
        $this->news = $this->model->getLastNews(4);
    }
}