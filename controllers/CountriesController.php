<?php

class CountriesController extends BaseController
{
    public function index()
    {
        $this->countries = $this->model->getCountries();
    }

}