<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action
{
    public function index()
    {
        //Instancia de conexão
        $conn = Connection::getDB();

        //Instanciar o Model
        $produto = new Produto($conn);

        $produtos = $produto->getProduto();

        $this->view->dados = $produtos;

        $this->render('index', 'Layout1');
    }

    public function sobreNos()
    {
        //Instancia de conexão
        $conn = Connection::getDB();

        //Instancia do Model
        $info =  new Info($conn);

        $informacao = $info->getInfo();

        $this->view->dados = $informacao;

        $this->render('sobreNos', 'Layout2');
    }
}
