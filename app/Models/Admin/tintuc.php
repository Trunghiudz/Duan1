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
    function insert_tintuc($tieude,$noidung,$ngayDang,$trangthai){
        $sql="insert into tin_tuc(tieu_de, noi_dung, ngayDang, trangThai) values ('$tieude','$noidung','$ngayDang', '$trangthai')";
        pdo_execute($sql);
    }
    function update_tintuc($id_tintuc,$tieude,$noidung,$trangthai,$ngayDang){
        $sql = "update tin_tuc set tieu_de = '$tieude', noi_dung='$noidung', trangThai='$trangthai', ngayDang='$ngayDang' where id_tintuc =".$id_tintuc;
        pdo_execute($sql);
    }
    function loadone_tintuc($id_tintuc){
        $sql = "select * from tin_tuc where id_tintuc =".$id_tintuc;
        $result = pdo_query_one($sql);
        return $result;
    }
?>