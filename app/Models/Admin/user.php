<?php
    function load_all_user(){
        $sql="select * from user where 1 order by id_user desc";
        $listuser=pdo_query($sql);
        return  $listuser;
    }
    function delete_user($id_user){
        $sql="delete from user where id_user=".$id_user;
        pdo_execute($sql);
    }
    function insert_user($tieude,$noidung,$ngayDang,$trangthai){
        $sql="insert into user(hoTen, soDienThoai, email, diachi, taiKhoan, matKhau, ngay_sinh, trangThai) values ('$tieude','$noidung','$ngayDang', '$trangthai')";
        pdo_execute($sql);
    }
?>