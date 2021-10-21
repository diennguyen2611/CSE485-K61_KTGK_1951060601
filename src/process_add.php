<?php

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

    $sql = "Insert into patient(firstname, lastname, dateofbirth, gender, mobile, email, height, weight, blood_type) Values
    ('$paFirstName', '$paLastName', '$paBirth', '$paGender', '$paMobile', '$paEmail', '$paHeight', '$paWeight', '$paBlood')";
    
    $result = mysqli_query($conn, $sql);

    if($result>0){
        header("Location:index.php");
    }
    else
        echo $sql;


?>