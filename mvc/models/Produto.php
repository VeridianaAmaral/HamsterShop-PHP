<?php

class Produto extends Model{

protected $tabela = "produto";
protected $query = "select prod.descricao as nomeProduto, prod.preco as preco, categ.nome as nomeCateg
from  produto prod join categoria categ
    on categ.id = prod.categoria_id";
}
?>