<?php

foreach ($produtos as $as) {   
    echo "
    <div class='col-sm-2 d-flex align-items-stretch' style='margin-top: 2rem;'>
    <div class='card corzinha'>
    <div class='card-header' style='text-align: center;'>
    <h5 class='card-title'>#{$as['nomeproduto']}</h5>
    </div>
    <div class='card-body' style='text-align: center'>
    <h5>Preco: {$as['preco']}</h5>
    <h5>Categoria: {$as['nomecateg']}</h5>
    <a class='btn btn-primary' href = 'estoque/ordemCompra'>Comprar</a>
    </div>
    </div>
    </div>     
    ";

    }

?>

