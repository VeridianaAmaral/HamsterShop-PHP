<?php

    class ProdutoController extends Controller{
         
        function cadastrar(){

            $categoria = new Categoria();
            $categorias = $categoria->read();
            $roedor = new Roedor();
            $roedores = $roedor->read();

            $this -> view('produto', compact('categorias', 'roedores'));
        }

    function salvar(){
        $produto = array();
        $produto['roedor_id'] = $_POST['roedor_id'];
        $produto['flg_admin'] = $_POST['flg_admin'];
        $produto['descricao'] = $_POST['descricao'];
        $produto['preco'] = $_POST['preco'];
        
        $produtos = new Produto();
        $produtos-> create($produto);
        $this->redirect('produto/listar');
    }

    function listarProdutos() {
        $param1 = $_GET['especie'];
        var_dump($param1);
        // $this -> view('template', $roedores);
    }

}

?>