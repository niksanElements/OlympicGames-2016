<?php


class MedalsController extends BaseController
{
    public function index()
    {
        $this->medals = $this->model->getMedals();
    }
}