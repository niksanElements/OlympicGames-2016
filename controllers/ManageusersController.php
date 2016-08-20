<?php
/**
 * Created by PhpStorm.
 * User: Chelikov
 * Date: 18.8.2016 г.
 * Time: 19:28 ч.
 */

class ManageusersController extends BaseController
{
    function index()
    {
        $this->authorizeAdmin();
        $this->users = $this->model->getAllUsers();
    }

    function edit()
    {
        $this->authorizeAdmin();
    }
}
