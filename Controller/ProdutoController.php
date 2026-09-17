<?php

namespace InfoTech\Controller;

use InfoTech\Model\Produto;

class ProdutoController extends Controller
{
    public static function index()
    {
        parent::isLogged();
        $model = new Produto();
        $model->getAllRows();

        parent::render('/Produto/listar_produto.php', $model);
    }

    public static function cadastro()
    {
        parent::isLogged();
        $model = new Produto();
        if(parent::isPost())
        {
            $model->id_produto = !empty($_POST['id_produto']) ? $_POST['id_produto'] : null;
            $model->nome = $_POST['nome'];
            $model->descricao = $_POST['descricao'];
            $model->preco = $_POST['preco'];
            $model->quantidade = $_POST['quantidade'];
            $model->status_produto = $_POST['status_produto'];
            $model->id_categoria = $_POST['id_categoria'];
            

            $model = $model->save();
            if($model){
                parent::redirect('/infotech/produto/listar');
            }
        }
        else{
            if(isset($_GET['id_produto'])){

                $id = $_GET['id_produto'];
                $model = Produto::getById($id);
            }

            parent::render('/Produto/cadastrar_produto.php' , $model);
        }

    }public static function exclusao()
    {
        parent::isLogged();
        if(isset($_GET['id_produto'])){

            $id = $_GET['id_produto'];
            $model = new Produto();
            $model->delete($id);

            parent::redirect('/infotech/produto/listar');
        }
    }
}