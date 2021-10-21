<?php
$id = $_POST['id'];
$paFirstName = $_POST['paFirstName'];
$paLastName = $_POST['paLastName'];
$paBirth = $_POST['paBirth'];
$paGender = $_POST['paGender'];
$paMobile = $_POST['paMobile'];
$paEmail = $_POST['paEmail'];
$paHeight = $_POST['paHeight'];
$paWeight = $_POST['paWeight'];
$paBlood = $_POST['paBlood'];


include('connect.php');

    $sql = "update `patient` set
    firstname = '$paFirstName', lastname = '$paLastName', dateofbirth = '$paBirth', gender = '$paGender', mobile = '$paMobile',
    email = '$paEmail', height = $paHeight, weight = '$paWeight', blood_type ='$paBlood' where patientid = '$id'";
    
    $result = mysqli_query($conn, $sql);

    if($result>0){
        header("Location:index.php");
    }
    else
        echo $sql;


?>