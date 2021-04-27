<?php

namespace App\Controllers;

class IndexController
{
    private  $view;

    public function __construct() {
        $this->view = new \stdClass();
    }

    public function index()
    {
        $this->render('index');
    }

    public function sobreNos()
    {
        $this->render('sobreNos');
    }

    public function render($view)
    {
        $classAtual = get_class($this);
        $classSemPath = str_replace('App\\Controllers\\', '', $classAtual);
        $class = str_replace('Controller', '', $classSemPath);

        require_once "../App/Views/" . $class . "/" . $view . ".phtml";
    }
}
