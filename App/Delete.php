<?php

    require_once "../Config/Conecction.php";

    $id = $_POST['id'];

    $eliminar -> execute(array('id' => $id));

    header("Location: ../Pages/Tables.php");
    