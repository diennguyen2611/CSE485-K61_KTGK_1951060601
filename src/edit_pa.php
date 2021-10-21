<?php
include('connect.php');
include('header.php');

$pa_id = $_GET['id'];

$sql = "select * from `patient` where patientid = $pa_id";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        
        $id = $row['patientid'];
        $firstname = $row['firstname'];
        
        $lastname = $row['lastname'];
        $birth = $row['dateofbirth'];

        $gender = $row['gender'];
        $mobile = $row['mobile'];
        $email = $row['email'];
        $height = $row['height'];
        $weight = $row['weight'];
        $blood = $row['blood_type'];
        $create = $row['create_on'];
        $modified = $row['modified_on'];
}
}
?>


<main>
    <div class="container">
        <h2>Cập nhật thông tin bệnh nhân</h2>
        <form action="process_edit.php" method="POST">
            <input type = "hidden" name='id' value="<?php echo $id; ?>">
            <div class="mb-3">
                <label for="paFirstName" class="form-label">Họ</label>
                <input type="text" class="form-control" name='paFirstName' value="<?php echo $firstname; ?>">
            </div>
            <div class="mb-3">
                <label for="paLastName" class="form-label">Tên</label>
                <input type="text" class="form-control" name="paLastName" value="<?php echo $lastname; ?>">
            </div>
            <div class="mb-3">
                <label for="paBirth" class="form-label">Ngày sinh</label>
                <input type="text" class="form-control" name="paBirth" value="<?php echo $birth; ?>">
            </div>
            <div class="mb-3">
                <label for="paGender" class="form-label">Giới tính</label>
                <select name="paGender" id="paGender">
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="paMobile" class="form-label">Điện thoại</label>
                <input type="text" class="form-control" name="paMobile" value="<?php echo $mobile; ?>">
            </div>
            <div class="mb-3">
                <label for="paEmail" class="form-label">Email</label>
                <input type="text" class="form-control" name="paEmail" value="<?php echo $email; ?>">
            </div>
            <div class="mb-3">
                <label for="paHeight" class="form-label">Chiều cao</label>
                <input type="text" class="form-control" name="paHeight" value="<?php echo $height; ?>">
            </div>
            <div class="mb-3">
                <label for="paWeight" class="form-label">Cân nặng</label>
                <input type="text" class="form-control" name="paWeight" value="<?php echo $weight; ?>">
            </div>
            <div class="mb-3">
                <label for="paBlood" class="form-label">Nhóm máu</label>
                <input type="text" class="form-control" name="paBlood" value="<?php echo $blood; ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Lưu lại</button>
            </div>
        </form>
    </div>
</main>

<?php
include('footer.php');
?>
