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