<?php
    if (!isset($estoques)) {
    
?>

<form action = "<?php echo APP . 'estoque/salvar'?>" method = "POST">
  <div class="form-row">
    <div class="form-group col-md-6">
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select name = "produto_id" id="inputState" class="form-control">
      <?php foreach ($produtos as $prod): ?>
                  <option name= "produto_id" value='<?= $prod['id'] ?>'><?= $prod['id'] ?> - <?= $prod['descricao'] ?>
                  </option>
                <?php endforeach; ?>
      </select>
    <div class="form-group col-md-6">
      <label for="inputQuantidade4">Quantidade</label>
      <input type="number" class="form-control" id="inputQuantidade4" placeholder="quantidade" name = "quantidade">
    </div>
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>

<?php
      }else{
        foreach ($estoques as $as) {   

        echo "
        <div class='col-sm-2 d-flex align-items-stretch' style='margin-top: 2rem;'>
        <div class='card corzinha'>
        <div class='card-header' style='text-align: center;'>
        <h5 class='card-title'>#{$as['nomeproduto']}</h5>
        </div>
        <div class='card-body' style='text-align: center'>
        <h5>Quantidade: {$as['qttproduto']}</h5>
        <h5>Preco: {$as['preco']}</h5>
        <h5>Categoria: {$as['nomecateg']}</h5>
        <a class='btn btn-danger' href = 'estoque/deletar/{$as['estoque_id']}'>Excluir</a>
        <a class='btn btn-primary' href = 'estoque/update/{$as['estoque_id']}'>Editar</a>
        </div>
        </div>
        </div>
         
        ";


        }
      }

?>