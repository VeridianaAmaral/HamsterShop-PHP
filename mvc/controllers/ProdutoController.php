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
        $produto['tipo'] = $_POST['tipo'];
        $produto['descricao'] = $_POST['descricao'];
        $produto['preco'] = $_POST['preco'];
        
        $produtos = new Produto();
        $produtos->create($produto);
        $this->redirect('produto/listar');

    }

}

?>