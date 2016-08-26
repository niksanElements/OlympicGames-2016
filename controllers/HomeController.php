<?php
/**
 * Created by PhpStorm.
 * User: Nikolay
 * Date: 8/2/2016
 * Time: 11:18 PM
 */


class HomeController extends BaseController
{
    protected $newsModel;
    protected $postsModel;
    protected $countriesModel;

    function __construct($controllerName, $actionName)
    {
        parent::__construct($controllerName, $actionName);
        $this->newsModel = new NewsModel();
        $this->postsModel = new ForumModel();
        $this->countriesModel = new CountriesModel();
    }

    function index()
    {
        $this->news = $this->newsModel->getLastNews(4);
        $this->posts = $this->postsModel->getLastPosts(4);
        $this->countries = $this->countriesModel->getCountries(4,"medalstotalDesc");
    }
}