<?php

namespace MF\Controller;

abstract class Action
{

    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($view, $layout)
    {
        $this->view->page = $view;

        if(file_exists("../App/Views/". $layout .".phtml")) {
            require_once "../App/Views/". $layout .".phtml";
        } else {
            $this->content();
        }
        
    }

    protected function content()
    {
        $classAtual = get_class($this);
        $classSemPath = str_replace('App\\Controllers\\', '', $classAtual);
        $class = str_replace('Controller', '', $classSemPath);

        require_once "../App/Views/" . $class . "/" . $this->view->page . ".phtml";
    }
}
