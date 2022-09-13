<?php
  require("Header.php");
?>


<!-- Tabla -->
<div class="tab-content">
    <div class="container-fluid">
        <div class="row">
            <div class="stat col-sm-3 shadow-sm bg-white text-success">
                <div class="bg-success">
                    <i class="fa-solid fa-users text-white"></i>
                </div>
                <?php
                    $sql = "SELECT * FROM tecnicos";
                    $result = mysqli_query($conn, $sql);
                    $resultChecker = mysqli_num_rows($result);
                    echo '<h4>'.$resultChecker.'</h4>';
                ?>
                <p>Registered Users</p>

            </div>
            
        </div>
    </div>
    <br><br>
    <div class="container-fluid">
        <div class="row">

        <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search">
                        </form>
                        <!-- boton de agregar Nuevos registros-->
                        <button
                            type="button"
                            class="btn btn-primary btn-sm"
                            data-toggle="modal"
                            data-target="#NewRegistro">
                            <i class='fa fa-plus'></i>
                            &nbsp; Nuevo Registro
                        </button>
                    </div>
                </nav>
            <div class="col-md-9">
                <div class="table-data">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Payment</th>
                                <th>Address</th>
                                <th>Mail</th>
                                <th>Phone</th>
                                <th>State</th>
                                <th>Birthday</th>
                            </tr>
                        </thead>
                            <tbody>
                            <?php
                                $sql = "SELECT * FROM tecnicos ";
                                if (isset($_POST['data'])) {
                                    $filter = $_POST['data'];
                                    $sql .= " WHERE Name LIKE '%$filter%' OR mail LIKE '%$filter%' OR phone LIKE ''%$filter%'";
                                }
                                $result = mysqli_query($conn, $sql);
                                $resultChecker = mysqli_num_rows($result);
                                if ($resultChecker > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $Name = $row['name'];
                                        $payment = $row['payment'];
                                        $Address = $row['Address'];
                                        $mail = $row['mail'];
                                        $phone = $row['phone'];
                                        $state = $row['state'];
                                        $birthday = $row['birthday'];

                                        echo '<tr>
                                        <td>'.$Name.'</td>
                                        <td>'.$payment.'</td>
                                        <td>'.$Address.'</td>
                                        <td>'.$mail.'</td>
                                        <td>'.$phone.'</td>
                                        <td>'.$state.'</td>
                                        <td>'.$birthday.'</td>
                                        <td>•••
                                        <div class="links shadow-sm">
                                        <form method="get" action="./Pages/Tables.php?id="'.$id.'"">
                                            
                                            <button 
                                            class="btn btn-danger btn-sm"
                                            type="submit" name="delete" value="'.$id.'">
                                            <i class=\'fa-solid fa-delete-left\'></i>
                                                &nbsp; Delete User
                                                <!-- boton de agregar Nuevos registros-->
                                            <button
                                                type="submit"
                                                class = "btn btn-info btn-sm"
                                               
                                                name = "edit"
                                                value="'.$id.'"    
                                                >
                                                <i class=\'fa fa-edit\'></i>
                                                    &nbsp; Edit User
                                            </button>

                                        </div>
                                        </form>

                                        </td>
                                        </tr>';
                                    }
                                }else{
                                    echo '<h1 style="color:red;">No User Found</h1>';
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
<div
        class="modal fade"
        id="NewRegistro"
        tabindex="-1"
        aria-labelledby="arbolJSLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="arbolJSLabel">Crear Registro</h5>
                    
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="cuerpoArbolModal">   
                        <?php include "./Pages/Agregar.php"; ?>                     
                    </div>
                    </div>
                    <div class="modal-footer">       
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
</div>


<?php
  require("Footer.php");
?>