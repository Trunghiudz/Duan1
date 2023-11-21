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
    function update_donhang($id_donhang,$hoTen, $trangThai, $soDienThoai, $email, $diaChi, $ngay_dathang, $tong_donhang, $id_user, $id_km){
        $sql = "update don_hang set hoTen='$hoTen',trangThai='$trangThai',soDienThoai='$soDienThoai',email='$email',diaChi='$diaChi',ngay_dathang='$ngay_dathang',tong_donhang='$tong_donhang',id_user='$id_user',id_km='$id_km' where id_donhang =".$id_donhang;
        pdo_execute($sql);
    }
    function queryonedh($id_donhang){
        $sql= "select * from don_hang where id_donhang=".$id_donhang;
        $result = pdo_query_one($sql);
        return $result;
    }
    function delete_donhang($id_donhang){
        $sql="delete from don_hang where id_donhang=".$id_donhang;
        pdo_execute($sql);
    }
?>