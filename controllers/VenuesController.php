<?php


class VenuesController extends BaseController
{
    public function index()
    {
        $this->venues = $this->model->getVenues();
    }
}