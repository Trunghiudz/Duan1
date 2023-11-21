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
        $sql="insert into lien_he(noi_dung, trangThai, id_user) values ('$noi_dung', '$trangThai', '$id_user')";
        pdo_execute($sql);
    }
    function update_lienhe($id_lienhe,$noi_dung, $trangThai, $id_user){
        $sql = "update lien_he set noi_dung='$noi_dung', trangThai='$trangThai', id_user='$id_user' where id_lienhe =".$id_lienhe;
        pdo_execute($sql);
    }
    function loadone_lienhe($id_lienhe){
        $sql = "select * from lien_he where id_lienhe =".$id_lienhe;
        $result = pdo_query_one($sql);
        return $result;
    }
?>