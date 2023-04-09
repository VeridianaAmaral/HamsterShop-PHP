<div class='row'>
  <form action="<?php echo APP . 'usuario/entrar'; ?>" method="post" name="login" id="login">
    <div class="col-md-3 mb-1">
      <label for="email" class="form-label">email</label>
      <input class='form-control' type="email" name="email" value="">
    </div>
    <div class="col-md-3 mb-1">
      <label for="senha" class="form-label">Senha</label>
      <input class='form-control' type="password" name="senha" value="">
    </div>
    <button class="btn btn-success" type="submit" name="button">Entrar</button>
    <a href="<?php echo APP . 'usuario/cadastrar'; ?>">Cadastrar</a>
  </form>
</div>