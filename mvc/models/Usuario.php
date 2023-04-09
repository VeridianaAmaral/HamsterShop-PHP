<?php

    class Usuario extends Model{

        protected $tabela = "usuario";
        protected $query = "";

        function logar($user){
            $username = $user['email'];
            $password = $user['senha'];
            $sql = "SELECT * FROM $this->tabela WHERE username = :username and password = :password";
            $sentenca = $this->conexao->prepare($sql);
            $sentenca->bindParam(":username", $username);
            $prepared_password = base64_encode($password);
            $sentenca->bindParam(":password", $prepared_password);
            $sentenca->execute();
            $dados = $sentenca->fetch();
            if($dados != null || $dados != false){
              $_SESSION['username'] = $dados['email'];
              $_SESSION['id'] = $dados['id'];
              $_SESSION['logado'] = true;
              $_SESSION['tipo'] = $dados['tipo'];
            }
            else {
              $_SESSION['username'] = "";
              $_SESSION['id'] = "";
            }
          }

    }
?>