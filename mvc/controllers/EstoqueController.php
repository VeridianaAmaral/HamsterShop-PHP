<?php

    class EstoqueController extends Controller{
         
        function cadastrar(){

            $produto = new Produto();
            $produtos = $produto->read();

            $this -> view('estoque', compact('produtos'));
        }

    function salvar(){
        $estoque = array();
        $estoque['produto_id'] = $_POST['produto_id'];
        $estoque['quantidade'] = $_POST['quantidade'];
        
        $estoques = new Estoque();
        $estoques->create($estoque);
        $this->redirect('estoque/listar');

    }

}

?>