<?php
    include('header.php');
?>


<div class="container-fluid overflow-hidden">
    <div class="col-md-12">
        <div class="row table-main">
            <h3 class="text-start"> Quản lý bệnh nhân</h3>

            <a href="add_pa.php" class ="btn-add"><button type="button" class="btn btn-primary">Thêm</button></a>

            <table class="table-responsive">
                <thead class="table-light">
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã Bệnh Nhân</th>
                        <th scope="col">Họ</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Chiều cao</th>
                        <th scope="col">Cân nặng</th>
                        <th scope="col">Nhóm Máu</th>
                        <th scope="col">Ngày tạo hồ sơ</th>
                        <th scope="col">Ngày cập nhật</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>

                <?php

                //b1: Kết nối
                include('connect.php');
                        //Bước 2: Thực hiện truy vấn
                    $sql ="Select * from patient";
                    $result = mysqli_query($conn, $sql);
                    $stt = 1;

                    //xử lý kết quả trả về
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
 
                        //Display the Values in our Table
                                    ?>

                <tr>
                    <td><?php echo $stt++; ?>. </td>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $firstname; ?></td>
                    <td><?php echo $lastname; ?></td>
                    <td><?php echo $birth; ?></td>
                    <td><?php 
                                    if($gender==1){
                                        echo 'Nam';
                                    }
                                    else
                                    echo 'Nữ';
                                 ?></td>

                    <td><?php echo $mobile; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $height; ?></td>
                    <td><?php echo $weight; ?></td>
                    <td><?php echo $blood; ?></td>
                    <td><?php echo $create; ?></td>
                    <td><?php echo $modified; ?></td>
                    <td>
                        <a href="edit_pa.php?id=<?php echo $id; ?>"><button type="button"
                                class="btn btn-success">Sửa</button></a>
                        <a href="delete_pa.php?id=<?php echo $id; ?>"
                            onclick="return confirm('Bạn chắc chắn muốn xóa?')"><button type="button"
                                class="btn btn-danger">Xóa</button></a>

                    </td>
                </tr>


                <?php
                        }
                    }
                    else{
                       echo $sql;
                    }
                ?>
            </table>

            <?php
            //Bước 4: Đóng kết nối
             mysqli_close($conn);
             ?>
        </div>
    </div>
</div>


<?php
    include('footer.php');

?>