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
        $produtos = $produto-> findBySpecie($especie);        
        $this -> view('produto', compact('produtos'));
    }

    function addCar($id) {
        if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = "";
        }
        
        $_SESSION['cart'] = "{$_SESSION['cart']}" . "{$id},";
        $returnePath = str_replace(APP, '', $_SERVER['HTTP_REFERER']);        

        $estoques = new Estoque();  
        $estoque = $estoques -> estoqueByProdutoId($id);    
        
        var_dump($estoque);           
        $dados['quantidade'] =  $estoque['qttproduto'] - 1;
        $dados['id'] =  $estoque['estoque_id'];
        $dados['produto_id'] =  $estoque['prod_id'];
        
        var_dump($dados);         
        $estoques -> update($dados);         
        $this -> redirect($returnePath);
    }
}
?>