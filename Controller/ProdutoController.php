<?php

namespace InfoTech\Controller;

use InfoTech\Model\Produto;

class ProdutoController extends Controller
{
    public string $nome;
    public float $preco;

    public static function listar()
    {
        $objProd = new Produto();
        $produtos = $objProd->getAllRows();
        include VIEW . '/Produto/listar_produto.php';
    }

    public static function novo()
    {
        include VIEW . '/Produto/cadastrar_produto.php';
    }

    public static function salvar()
    {
        $objProd = new Produto();
        $objProd->nome = $_POST['nome'];
        $objProd->descricao = $_POST['descricao'];
        $objProd->preco = $_POST['preco'];
        $objProd->quantidade_estoque = $_POST['quantidade_estoque'];
        $objProd->status_produto = $_POST['status_produto'];

        $objProd->save();

        include VIEW . '/Produto/cadastrar_produto.php';
    }

    public static function editar($id)
    {
        $produto = Produto::getById($id);
        include VIEW . '/Produto/listar_produto.php';
    }

    public static function atualizar()
    {
        $objProd = new Produto();
        $objProd->id_produto = $_POST['id_produto'];
        $objProd->nome = $_POST['nome'];
        $objProd->descricao = $_POST['descricao'];
        $objProd->preco = $_POST['preco'];
        $objProd->quantidade_estoque = $_POST['quantidade_estoque'];
        $objProd->status_produto = $_POST['status_produto'];

        $objProd->save();

        header('Location: ' . '/Produto' . '/listar_produto');
    }

    public static function deletar($id)
    {
        $objProd = new Produto();
        $objProd->delete($id);

        header('Location: ' . '/Produto' . '/listar_produto');
    }
}