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
        $this->redirect('estoque/cadastrar');

    }

    function listar(){
         if (!$_SESSION['flg_admin']) {
            $this->redirect('index/index');
        }

        $estoque = new Estoque();
        $estoques = $estoque->read();
        $this->view('estoque' ,compact('estoques'));
    }

    function deletar(){
        $estoque = new Estoque();
        $id = $_GET['id'];
        $estoque -> delete($id);
        $this -> redirect('estoque/listar');
    }

    public function delete($id) {
      $sql = "DELETE FROM $this->tabela WHERE id = :id";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":id", $id);
      $sentenca->execute();
    }

    function update(){
        var_dump($_POST['quantidade']);    
        var_dump($_POST['estoque_id']);    
        
        $estoque = new Estoque();
        $data['quantidade'] = $_POST['quantidade'];        
        $data['id'] = $_POST['estoque_id'];  
        $estoque -> update($data);
        $this -> redirect('estoque/listar');
    }

    function redirecionaEditarEstoque(){        
        $id = $_GET['id'];
        $estoque = new Estoque();
        $est = $estoque -> getById($id);        
        $this -> view('editarestoque', compact('est'));
    }

}

?>
