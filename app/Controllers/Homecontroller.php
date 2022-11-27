<?php

namespace App\Controllers;

class Home extends BaseController
{
    public $model;
    public string $title;
    public string $table;

    public function index()
    {
        echo view('templates/header');
        echo view('templates/home');
    }

}
