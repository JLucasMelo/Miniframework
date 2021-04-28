<?php

namespace App\Controllers;

//Recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

//Import dos Models
use App\Models\Produto;
use App\Models\Info;


class IndexController extends Action
{
    public function index()
    {
        $produto = Container::getModel('Produto');

        $produtos = $produto->getProduto();

        $this->view->dados = $produtos;

        $this->render('index', 'Layout1');
    }

    public function sobreNos()
    {
        $info = Container::getModel('Info');

        $informacao = $info->getInfo();

        $this->view->dados = $informacao;

        $this->render('sobreNos', 'Layout2');
    }
}
