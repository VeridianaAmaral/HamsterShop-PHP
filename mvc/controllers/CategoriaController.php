<?php

    class CategoriaController extends Controller{
         
        function cadastrar(){
            $dados = array();
            $this -> view('categoria', $dados);
        }

    function salvar(){
        $categoria = array();
        $categoria['nome'] = $_POST['nome'];
        
        $categ = new Categoria();
        $categ->create($categoria);
        $this->redirect('categoria/cadastrar');

    }

}

?>