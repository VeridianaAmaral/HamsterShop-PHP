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
        $produto['categoria_id'] = $_POST['categoria_id'];
        $produto['descricao'] = $_POST['descricao'];
        $produto['preco'] = $_POST['preco'];
        
        $produtos = new Produto();
        $produtos-> create($produto);
        $this->redirect('produto/cadastrar');
    }

    function listarProdutos() {        
        $especie = $_GET['especie'];              
        $produto = new Produto();   
        $produtos = $produto -> findBySpecie($especie);        
        $this -> view('produto', compact('produtos'));
    }
}
?>