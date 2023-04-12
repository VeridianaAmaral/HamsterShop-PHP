<?php
    if (!isset($produtos)) {
    
?>

<form action="<?php echo APP . 'produto/salvar'?>" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Tipo de roedor</label>
      <select name="roedor_id" id="inputState" class="form-control">
        <?php foreach ($roedores as $roedor): ?>
          <option name="roedor_id" value="<?= $roedor['id'] ?>"><?= $roedor['id'] ?> - <?= $roedor['especie'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Categoria</label>
      <select name="categoria_id" id="inputState" class="form-control">
        <?php foreach ($categorias as $categoria): ?>
          <option name="categoria_id" value="<?= $categoria['id'] ?>"><?= $categoria['id'] ?> - <?= $categoria['nome'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputDescricao4">Nome do Produto</label>
      <input type="text" class="form-control" id="inputDescricao4" placeholder="Nome do produto" name="descricao">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPreco4">Preço</label>
      <input type="number" step="0.01" min="0" class="form-control" id="inputPreco4" placeholder="Preço" name="preco">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Adicionar</button>
</form>





<?php
      } else{        
        
        echo " <div class='row'>";
        foreach ($produtos as $prod) {   
          echo "          
          <div class='col-sm-6'>
            <div class='card'>
              <div class='card-body'>
                <h5 class='card-title'> {$prod['titulo']} </h5>
                <p class='card-text'>Preco: {$prod['preco']}</p>
                <p class='card-text'>Categoria: {$prod['categoria']}</p>
                " . (!isset($prod['estoque']) && ($prod['estoque'] == 0 || $prod['estoque'] == null || $prod['estoque'] == false) ? "<a href='#' class='btn btn-danger disabled'>Indisponível</a>" : "<a href='#' class='btn btn-primary '>Comprar</a>") . "
              </div>
            </div>    
            </div>          
          ";
        }
        echo "  </div>   ";
      }

?>