<?php

class Estoque extends Model{

protected $tabela = "estoque";
protected $query = "select es.id as estoque_id, es.quantidade as qttProduto, es.produto_id as prod_id, prod.descricao as nomeProduto, prod.preco as preco, categ.nome as nomeCateg
from estoque es join produto prod
    on es.produto_id = prod.id join categoria_produto categ
    on categ.id = prod.tipo
";

}

?>