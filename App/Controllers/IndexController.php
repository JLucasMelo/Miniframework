<?php

namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action
{
    public function index()
    {
        $this->render('index', 'Layout1');
    }

    public function sobreNos()
    {
        $this->render('sobreNos', 'Layout2');
    }
}
