<?php
    function load_all_donhang(){
        $sql="select * from don_hang where 1 order by id_donhang desc";
        $listdonhang=pdo_query($sql);
        return  $listdonhang;
    }
    function insert_donhang($hoTen, $trangThai, $soDienThoai, $email, $diaChi, $ngay_dathang, $tong_donhang, $id_user, $id_km){
        $sql="insert into don_hang(hoTen, trangThai, soDienThoai, email, diaChi, ngay_dathang, tong_donhang, id_user, id_km) values ('$hoTen', '$trangThai', '$soDienThoai', '$email', '$diaChi', '$ngay_dathang', '$tong_donhang', '$id_user', '$id_km')";
        pdo_execute($sql);
    }
?>