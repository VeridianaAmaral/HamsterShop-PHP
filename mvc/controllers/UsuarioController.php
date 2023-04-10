<?php

class UsuarioController extends Controller{

    function login(){
        unset($_SESSION['message']);
        $dados = array();
        $this->view('login', $dados);    
        //verifica se é admin ou cliente
    }

    function entrar(){        
        $user = array();
        $user['email'] = $_POST['email'];
        $user['senha'] = $_POST['senha'];

        $usuario = new Usuario();
        $usuario->logar($user);
        
       
        if(isset($_SESSION['logado'])) {                 
            $this-> view('index', $user); 
        }   
        
        $this-> view('login', $user);
    }

    function cadastrar(){
        $dados = array();
        $this -> view('cadastroUsuario', $dados);
    }

    function salvar(){
        $user = array();
        $user['nome'] = $_POST['nome'];
        $user['email'] = $_POST['email'];
        $user['senha'] = base64_encode($_POST['senha']);
        $user['telefone'] = $_POST['telefone'];
        $user['flg_admin'] = $_POST['flg_admin'];

        $usuario = new Usuario();
        $usuario->create($user);
        $this->redirect('usuario/login');
    }

    function deslogar(){
        session_destroy();
        $this->redirect("");
      }

    function admin(){
        //na hora de logar redireciona para estoque(dentro de estoque faz o redirecionamento para cadastro de categoria e produto)
    }

    function cliente(){
        //visualiza a categoria e produtos
    }


}

?>