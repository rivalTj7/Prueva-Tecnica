<?php
    include_once './Config/Conecction.php';
?>

<?php
    if (isset($_GET['error'])) {
      $error = $_GET['error'];
      if ($error == "emptyfield") {
        echo '<div class="to shadow">
        <p class="pt-3">Empty Fields</p>
      </div>';
      } elseif ($error == "wrongemail") {
        echo '<div class="to shadow">
        <p class="pt-3">Wrong Email</p>
      </div>';
      } elseif ($error == "userexist") {
        echo '<div class="to shadow">
        <p class="pt-3">User Exist</p>
      </div>';
      }  elseif ($error == "success") {
        echo '<div class="to shadow">
        <p class="pt-3">Register Success</p>
      </div>';
      }
    }
?>


    <div class="card x">
        <div class="card-body text-center">
            <form method="post" action="./App/Create.in.php">
                <div class="mb-3">
                <p class="card-text" style="font-family: 'Roboto', cursive;font-size: 70px;color:black;">Registrar</p>
                </div>
                <div class="mb-3">
                    <label for="Name" class="form-label">Nombre</label>
                    <input type="text" name="Name" class="form-control"  id="Name">
                </div>
                <div class="mb-3">
                    <label for="payment" class="form-label">Cuanto gana por Hora</label>
                    <input type="number" min="1" step="any" name="payment" class="form-control"  id="payment" >
                    <i>Q </i>
                </div>
                <div class="mb-3">
                    <label for="Address" class="form-label">Dirección de Residencia</label>
                    <input type="text"  name="Address" class="form-control" id="Address" size = 15>
                </div>
                <div class="mb-3">
                    <label for="Mail" class="form-label">Correo</label>
                    <input type="email" name="Mail" class="form-control" id="Mail">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="tel"  name="phone" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">Estado</label>
                    <select name = "state" class="form-select" aria-label="Default select example" id="state">
                        <option selected>Open this select menu</option>
                        <option value="Soltero">Soltero</option>
                        <option value="Casado">Casado</option>
                        <option value="Divorsiado">Divorsiado</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">Fecha de nacimiento</label>
                    <input type="date" name="birthday" class="form-control" id="birthday">
                </div>
                <button type="submit" name="register" class="btn btn-success" style="width: 280px">
                    Register
                </button>
            </form>
        </div>
    </div>

