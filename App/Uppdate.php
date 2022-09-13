<?php
    if (isset($_POST['update'])) {
        include_once('../Config/Conecction.php');
        $name = trim($_POST['name']);
        $payment = trim($_POST['payment']);
        $Address = trim($_POST['Address']);
        $phone = $_POST['phone'];
        $mail = trim($_POST['mail']);
        $state = trim($_POST['state']);
        $birthday = trim($_POST['birthday']);
        $id = $_POST['id'];	
        if(empty($name) || empty($payment) || empty($Address) || empty($phone) || empty($mail) || empty($state) || empty($birthday)){
            header('Location: ../index.php?error = emptyfield');
            exit();
        }elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            header('Location: ../index.php?error = wrongemail');
            exit();
        }else{
            $sql = "UPDATE tecnicos SET name = '$name', payment = '$payment', Address = '$Address', mail = '$mail', phone = '$phone', state = '$state', birthday = '$birthday' WHERE id = '$id';";
            mysqli_query($conn, $sql);
            header('Location: ../index.php?error = success');
        }
    }else{
        header('Location: ../index.php');
    }  