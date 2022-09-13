<?php
  require("../Header.php");
?>
  
  <div class="card x">
        <div class="card-body text-center">
      <div class="register-form">
        <form method="post" action="../App/Uppdate.php">
          <div class="mb-3">
            <h3>UPDATE USER</h3>
          </div>
          <input type="number" name="id" value="<?php echo $_GET['id']; ?>" style="width:35px; visibility:hidden;">
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" value="<?php echo $_GET['name']; ?>" class="form-control" id="name">
          </div>

          <div class="mb-3">
            <label for="payment" class="form-label"> Payment</label>
            <input type="number" name="payment" value="<?php echo $_GET['payment']; ?>" class="form-control" id="payment">
          </div>

          <div class="mb-3">
            <label for="Address" class="form-label">Direccion</label>
            <input type="text" name="Address" value="<?php echo $_GET['Address']; ?>" class="form-control" id="Address">
          </div>
          <div class="mb-3">
            <label for="mail" class="form-label">Correo</label>
            <input type="email" name="mail" value="<?php echo $_GET['mail']; ?>" class="form-control" id="mail">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label"> Teléfono </label>
            <input type="number" name="phone" value="<?php echo $_GET['phone']; ?>" class="form-control" id="phone">
          </div>
          <div class="mb-3">
            <label for="state" class="form-label"> Estado </label>
            <input type="text" name="state" value="<?php echo $_GET['state']; ?>" class="form-control" id="state">
          </div>
          <div class="mb-3">
            <label for="birthday" class="form-label"> Fecha de nacimiento </label>
            <input type="date" name="birthday" value="<?php echo $_GET['birthday']; ?>" class="form-control" id="birthday">
          </div>
          <button type="submit" name="update" class="btn btn-success">Update</button>
        </div>
      </form>
    </div>
  </div>
