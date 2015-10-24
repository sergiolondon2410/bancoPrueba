
<div class="row">
  <div class="col-md-4 col-md-offset-2">
    <h2>Transferencias</h2>
    <h5>Entre cuentas propias</h5>
    <hr>
    <form action="<?= DIR_RAIZ ?>/home/logear" method="post" id="TransForm">

      <div class="form-group">
        <label for="username">Cuenta desde la que envía</label>
        <select class="form-control" id="envia" name="envia">
          <?php foreach ($lista as $value):?>
            <option value="<?= $value["id"] ?>"><?= $value["numero"] ?></option>
          <?php endforeach ?>  
        </select>
      </div>
      <div class="form-group">
        <label for="username">Cuenta en la que recibe</label>
        <select class="form-control" id="recibe" name="recibe">
          <?php foreach ($lista as $value):?>
            <option value="<?= $value["id"] ?>"><?= $value["numero"] ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label class="sr-only" for="monto" >Cantidad</label>
        <div class="input-group">
          <div class="input-group-addon">$</div>
          <input type="text" class="form-control" id="monto" name="monto" placeholder="monto">
          <div class="input-group-addon">.00</div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Transferir</button>
    </form>
  </div>
</div>