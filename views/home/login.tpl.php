
<div class="row">
  <div class="col-md-4 col-md-offset-2">
    <h2>Ingresar</h2>
    <hr>
    <form action="<?= DIR_RAIZ ?>/home/logear" method="post" id="loginForm">
      <div class="form-group">
        <label for="username">Usuario</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su nombre de usuario">
      </div>
      <div class="form-group">
        <label for="pass">Contraseña</label>
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingrese 4 números">
      </div>
      <button type="submit" class="btn btn-success">Login</button>
    </form>
  </div>
</div>
<!-- jQuery-validation -->
    <script src="<?= DIR_RAIZ ?>/js/jquery-validation/lib/jquery.js"></script>
    <script src="<?= DIR_RAIZ ?>/js/jquery-validation/dist/jquery.validate.js"></script>
<script>
    $().ready(function() {
      $("#loginForm").validate({
        rules: {
          username:  {
            required: true
          },
          pass: {
            required: true,
            minlength: 4
          }
        },
        messages: {
          username: "Por favor ingrese su nombre de usuario",
          pass: {
            required: "Por favor ingrese su contraseña",
            minlength: "Su contraseña debe tener 4 caracteres"
          }
        }
      });
    });
  </script>