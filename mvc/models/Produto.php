<?php

class Produto extends Model{

protected $tabela = "produto";
protected $query = "select prod.id as id, prod.descricao as nomeProduto, prod.preco as preco, categ.nome as nomeCateg
from  produto prod join categoria categ
    on categ.id = prod.categoria_id";

    public function findBySpecie($value) {
        $query = "select prod.descricao as nomeProduto, prod.preco as preco, cat.nome as nomeCateg
            from produto prod 
            inner join categoria cat on cat.id = prod.categoria_id            
            inner join roedor roe on roe.id = prod.roedor_id         
            WHERE roe.especie = :especie";
        
        $sentenca = $this->conexao->prepare($query);
        $sentenca->setFetchMode(PDO::FETCH_UNIQUE);
        $sentenca->bindValue(":especie", $value);
        $sentenca->execute();
        $dados = $sentenca->fetchAll();        
        return $dados;
    }
} 
?>