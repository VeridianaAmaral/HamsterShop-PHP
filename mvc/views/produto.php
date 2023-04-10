<form action = "<?php echo APP . 'produto/salvar'?>" method = "POST">
  <div class="form-row">
    <div class="form-group col-md-6">
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select name = "roedor_id" id="inputState" class="form-control">
      <?php foreach ($roedores as $roedor): ?>
                  <option name="roedor_id" value='<?= $roedor['id'] ?>'><?= $roedor['id'] ?> - <?= $roedor['especie'] ?>
                  </option>
                <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select name = "categoria_id" id="inputState" class="form-control">
      <?php foreach ($categorias as $categ): ?>
                  <option name= "categoria_id" value='<?= $categ['id'] ?>'><?= $categ['id'] ?> - <?= $categ['nome'] ?>
                  </option>
                <?php endforeach; ?>
      </select>
    </div>
      <label for="inputDescricaol4">Nome do Produto</label>
      <input type="text" class="form-control" id="inputDescricaol4" placeholder="Nome do produto" name = "descricao">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPreco4">Preco</label>
      <input type="number" step="0.01" min= "0" class="form-control" id="inputPreco4" placeholder="preco" name = "preco">
    </div>
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>