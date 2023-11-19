<?php
    function load_all_lienhe(){
        $sql="select * from lien_he where 1 order by id_lienhe desc";
        $listlienhe=pdo_query($sql);
        return  $listlienhe;
    }
    function delete_lienhe($id_lienhe){
        $sql="delete from lien_he where id_lienhe=".$id_lienhe;
        pdo_execute($sql);
    }
    function insert_lienhe($noi_dung, $trangThai, $id_user){
        $sql="insert into lien_he(noi_dung, trangThai, id_user) values ('$noidung', '$trangthai', '$id_user')";
        pdo_execute($sql);
    }
    function update_lienhe($id_tintuc,$tieude,$noidung,$trangthai,$ngayDang){
        $sql = "update tin_tuc set tieu_de = '$tieude', noi_dung='$noidung', trangThai='$trangthai', ngayDang='$ngayDang' where id_tintuc =".$id_tintuc;
        pdo_execute($sql);
    }
    function loadone_lienhe($id_tintuc){
        $sql = "select * from tin_tuc where id_tintuc =".$id_tintuc;
        $result = pdo_query_one($sql);
        return $result;
    }
?>