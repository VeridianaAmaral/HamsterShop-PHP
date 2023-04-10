<?php

class Produto extends Model{

protected $tabela = "produto";
protected $query = "select prod.descricao as nomeProduto, prod.preco as preco, categ.nome as nomeCateg
from  produto prod join categoria categ
    on categ.id = prod.categoria_id";

    public function findBySpecie($value) {
        $query = "select prod.descricao as nomeProduto, prod.preco as preco, cat.nome as nomeCateg
            from produto prod 
            join categoria cat on cat.id = prod.categoria_id            
            join roedor roe on roe.id = prod.roedor_id            
            ";

        $sql = "$query WHERE roe.especie = :especie";
        $sentenca = $this->conexao->prepare($sql);
        $sentenca->bindValue(":especie", $value);
        $sentenca->execute();
        $dados = $sentenca->fetch();
        return $dados;
    }
}
?>