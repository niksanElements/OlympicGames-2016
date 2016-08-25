<?php
class ManagenewsController extends BaseController
{
    function index()
    {
        $this->authorizeAdmin();
        $this->news = $this->model->getAllNews();
    }
}
?>
