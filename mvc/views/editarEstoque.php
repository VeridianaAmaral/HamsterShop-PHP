

<form action="<?php echo APP . 'estoque/update'?>" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Estoque ID</label>
      <?php      
      echo "<input type='number' class='form-control' id='inputQuantidade4'  name='estoque_id' value='{$est['id']}' readonly>"
      ?>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputQuantidade4">Quantidade</label>
      <input type="number" class="form-control" id="inputQuantidade4" placeholder="Quantidade" name="quantidade">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Adicionar</button>
</form>

