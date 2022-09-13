<?php
    if (isset($_POST['register'])){
        include_once('../Config/Conecction.php');
        $Name = trim($_POST['Name']);

        $payment = $_POST['payment'];
        $Address = $_POST['Address'];
        $phone = $_POST['phone'];
        $Mail = $_POST['Mail'];
        $state = $_POST['state'];
        $birthday = $_POST['birthday'];

        if(empty($Name) || empty($payment) || empty($Address) || empty($phone) || empty($Mail) || empty($state) || empty($birthday)){
            header('Location: ../index.php?error = emptyfield');
            exit();
        }else{
            $sql = "SELECT * FROM tecnicos WHERE mail = '$Mail';";
            $result = mysqli_query($conn, $sql);
            $resultChecker = mysqli_num_rows($result);
            if($resultChecker > 0){
                header('Location: ../index.php?error = emailtaken');
                exit();
            }else{
                $sql = "INSERT INTO tecnicos(name,payment,Address,mail,phone,state,birthday) VALUES('$Name','$payment','$Address','$Mail','$phone','$state','$birthday')";
                mysqli_query($conn, $sql);
                header('Location: ../index.php?error = success');
            }
        }
    }else{
        header('Location: ../index.php');
    }