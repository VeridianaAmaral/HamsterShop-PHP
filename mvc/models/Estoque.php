<?php

class Estoque extends Model{

protected $tabela = "estoque";
protected $query = "select es.id as estoque_id, es.quantidade as qttProduto, es.produto_id as prod_id, prod.descricao as nomeProduto, prod.preco as preco, categ.nome as nomeCateg
from estoque es join produto prod
    on es.produto_id = prod.id join categoria categ
    on categ.id = prod.categoria_id    
";

function estoqueByProdutoId($produto_id) {
    $query = "SELECT estoque.id FROM estoque WHERE produto_id = :produto_id LIMIT 1";
        
    $sentenca = $this->conexao->prepare($query);
    $sentenca->setFetchMode(PDO::FETCH_ASSOC);
    $sentenca->bindValue(":produto_id", $produto_id);
    $sentenca->execute();
    $dados = $sentenca->fetchAll();     
    return $dados;
   
}
}

?>