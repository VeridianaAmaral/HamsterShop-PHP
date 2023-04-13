<?php

class Produto extends Model{

protected $tabela = "produto";
protected $query = "select prod.id as id, prod.descricao as titulo, prod.preco as preco, categ.nome as categoria, estq.quantidade as estoque
from produto prod
    join categoria categ on categ.id = prod.categoria_id
    left join estoque estq on estq.produto_id = prod.id
    order by id;
    ";
     

    public function findBySpecie($value) {
        $query = "select prod.id as id, prod.descricao as titulo, prod.preco as preco, cat.nome as categoria, estq.quantidade as estoque
            from produto prod 
            inner join categoria cat on cat.id = prod.categoria_id            
            inner join roedor roe on roe.id = prod.roedor_id         
            left join estoque estq on estq.produto_id = prod.id
            WHERE lower(roe.especie) LIKE LOWER(:especie)";
        
        $sentenca = $this->conexao->prepare($query);
        $sentenca->setFetchMode(PDO::FETCH_UNIQUE);
        $sentenca->bindValue(":especie", $value);
        $sentenca->execute();
        $dados = $sentenca->fetchAll();        
        return $dados;
    }
} 
?>