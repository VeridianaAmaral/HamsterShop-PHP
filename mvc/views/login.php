<div class='row'>
  <form action="<?php echo APP . 'usuario/entrar'; ?>" method="post" name="login" id="login">
    <div class="col-md-3 mb-1s">
      <label for="email" class="form-label">E-mail</label>
      <input class='form-control button-color' type="email" name="email" value="" style="background-color: #F3EBFC">
    </div>
    <div class="col-md-3 mb-1">
      <label for="senha" class="form-label">Senha</label>
      <input class='form-control button-color' type="password" name="senha" value="" style="background-color: #F3EBFC">          
    </div>
    
      <?php echo (isset($_SESSION['message']) ? "<div class='col-md-3 mb-1 alert alert-danger'> {$_SESSION['message']} </div>" : '') ?>    

    <button class="btn btn-success" type="submit" name="button" >Entrar</button>
    <a href="<?php echo APP . 'usuario/cadastrar'; ?>">Cadastrar</a>
  </form>
</div>
