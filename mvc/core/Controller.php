<?php
class Controller
{
    function model($model)
    {
        require_once "./mvc/models/" . $model . ".php";
        $con = new DB();
        return new $model($con);
    }


    //
    function view($view, $data = [])
    {
        extract($data);
        require_once "./mvc/views/" . $view . ".php";
    }
}
