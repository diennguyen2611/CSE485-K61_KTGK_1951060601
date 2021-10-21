<?php include('header.php') ?>

<main>
    <div class="container">
        <h2>Thêm Bệnh Nhân</h2>
        <form action="process_add.php" method="POST">
            <div class="mb-3">
                <label for="paFirstName" class="form-label">Họ</label>
                <input type="text" class="form-control" name='paFirstName'>
            </div>
            <div class="mb-3">
                <label for="paLastName" class="form-label">Tên</label>
                <input type="text" class="form-control" name="paLastName">
            </div>
            <div class="mb-3">
                <label for="paBirth" class="form-label">Ngày sinh</label>
                <input type="text" class="form-control" name="paBirth">
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
                <input type="text" class="form-control" name="paMobile">
            </div>
            <div class="mb-3">
                <label for="paEmail" class="form-label">Email</label>
                <input type="text" class="form-control" name="paEmail">
            </div>
            <div class="mb-3">
                <label for="paHeight" class="form-label">Chiều cao</label>
                <input type="text" class="form-control" name="paHeight">
            </div>
            <div class="mb-3">
                <label for="paWeight" class="form-label">Cân nặng</label>
                <input type="text" class="form-control" name="paWeight">
            </div>
            <div class="mb-3">
                <label for="paBlood" class="form-label">Nhóm máu</label>
                <input type="text" class="form-control" name="paBlood">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Lưu lại</button>
            </div>
        </form>
    </div>
</main>

<?php include('footer.php') ?>