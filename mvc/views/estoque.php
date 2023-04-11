<?php
    if (!isset($estoques)) {
    
?>

<form action="<?php echo APP . 'estoque/salvar'?>" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Produto</label>
      <select name="produto_id" id="inputState" class="form-control">
        <?php foreach ($produtos as $prod): ?>
          <option value="<?= $prod['id'] ?>"><?= $prod['id'] ?> - <?= $prod['titulo'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputQuantidade4">Quantidade</label>
      <input type="number" class="form-control" id="inputQuantidade4" placeholder="Quantidade" name="quantidade">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Adicionar</button>
</form>


<?php
      }else{
        echo " <div class='row'>";
        $deletarEstoque = APP . 'estoque/deletar';
        $updateEstoque = APP . 'estoque/redirecionaeditarestoque';        
        
        foreach ($estoques as $estq) {   

        echo "
        <div class='col-sm-6'>
          <div class='card'>
            <div class='card-body'>
              <h5 class='card-title'> {$estq['nomeproduto']} </h5>
              <p class='card-text'>Quantidade: {$estq['qttproduto']}</p>            
              <p class='card-text'>Preco: {$estq['preco']}</p>
            <p class='card-text'>Categoria: {$estq['nomecateg']}</p>
            <a class='btn btn-danger' href = '$deletarEstoque?id={$estq['estoque_id']}'>Excluir</a>           
            <a class='btn btn-primary' href='$updateEstoque?id={$estq['estoque_id']}'>Editar</a>          
          </div>
        </div>    
        </div>                      
        ";
        }
        echo "  </div>   ";
      }
?>