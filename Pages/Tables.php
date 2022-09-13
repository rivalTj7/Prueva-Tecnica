<?php

    include_once('../Config/Conecction.php');
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql = "DELETE FROM tecnicos WHERE id = ".$id."";
        mysqli_query($conn, $sql);
        header("Location: ../index.php");
    }elseif (isset($_GET['upload'])) {
        $id = $_GET['upload'];
        $sql = "UPDATE tecnicos SET upload = 'Uploaded' WHERE id = ".$id."";
        mysqli_query($conn, $sql);
        header("Location: ../index.php");
    }  elseif (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $sql = "SELECT * FROM tecnicos WHERE id=".$id.";";
                        $result = mysqli_query($conn, $sql);
                        $resultChecker = mysqli_num_rows($result);
                        echo $resultChecker;
                        if ($resultChecker > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $name = $row['name'];
                                $payment = $row['payment'];
                                $Address = $row['Address'];
                                $mail = $row['mail'];
                                $phone = $row['phone'];
                                $state  = $row['state'];
                                $birthday = $row['birthday'];    
                                header("Location: ./Edit.php?id=".$id."&name=".$name."&payment=".$payment."&mail=".$mail."&phone=".$phone."&state=".$state."&Address=".$Address."&birthday=".$birthday."");
                            }
                        }
    } 
    else {
        # code...
    }