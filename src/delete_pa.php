<?php 
include('connect.php');

//lấy id

$pa_id= $_GET['id'];

$sql = "delete from `patient` where patientid = $pa_id ";
$result = mysqli_query($conn, $sql);

if($result>0){
    header("Location: index.php");
}
else
echo $sql;

?>
