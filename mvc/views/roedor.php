<form action="<?php echo APP . 'roedor/salvar'?>" method="POST">
  <div class="row mb-3">
    <div class="col-md-6">
      <label for="inputEspecie" class="form-label">Espécie</label>
      <input type="text" class="form-control" id="inputEspecie" placeholder="Digite a espécie do roedor" name="especie">
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <button type="submit" class="btn btn-primary">Adicionar</button>
    </div>
  </div>
</form>
