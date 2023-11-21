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
    function insert_user($hoTen, $soDienThoai, $email, $diaChi, $taiKhoan, $matKhau,$ngay_sinh, $trangThai, $id_role){
        $sql="insert into user(hoTen, soDienThoai, email, diaChi, taiKhoan, matKhau, ngay_sinh, trangThai, id_role) values ('$hoTen','$soDienThoai','$email','$diaChi','$taiKhoan','$matKhau','$ngay_sinh','$trangThai','$id_role')";
        pdo_execute($sql);
    }
    function loadone_user($id_user){
        $sql = "select * from user where id_user =".$id_user;
        $result = pdo_query_one($sql);
        return $result;
    }
    function update_user($id_user,$hoTen, $soDienThoai, $email, $diaChi, $taiKhoan, $matKhau,$ngay_sinh, $trangThai, $id_role){
        $sql = "update user set hoTen='$hoTen', soDienThoai='$soDienThoai', email='$email', diaChi='$diaChi', taiKhoan='$taiKhoan', matKhau='$matKhau', ngay_sinh='$ngay_sinh', trangThai='$trangThai', id_role='$id_role' where id_user =".$id_user;
        pdo_execute($sql);
    }
?>