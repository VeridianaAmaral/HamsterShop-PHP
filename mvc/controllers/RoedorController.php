<?php

    class RoedorController extends Controller {
        
    function cadastrar(){
        $dados = array();
        $this -> view('roedor', $dados);
    }

    function salvar(){
        $roedor = array();
        $roedor['especie'] = $_POST['especie'];
        
        $roedores = new Roedor();
        $roedores->create($roedor);
        $this->redirect('roedor/listar');
    }  
}

?>