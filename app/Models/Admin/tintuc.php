<?php
    function load_all_tintuc(){
        $sql="select * from tin_tuc where 1 order by id_tintuc desc";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }
    function delete_tintuc($id_tintuc){
        $sql="delete from tin_tuc where id_tintuc=".$id_tintuc;
        pdo_execute($sql);
    }
    function insert_tintuc($tieude,$noidung,$trangthai,$ngayDang){
        $sql="INSERT INTO tin_tuc(tieu_de, noi_dung, trangThai, ngayDang) values ('$tieude','$noidung', '$trangthai', '$ngayDang');";
        pdo_execute($sql);
    }
?>