<?php
    function load_all_khuyenmai(){
        $sql="select * from khuyen_mai where 1 order by id_km desc";
        $listkhuyenmai=pdo_query($sql);
        return  $listkhuyenmai;
    }
    function delete_khuyenmai($id_km){
        $sql="delete from khuyen_mai where id_km=".$id_km;
        pdo_execute($sql);
    }
    function insert_khuyenmai($ma_km,$phantram_km,$trangThai,$ngay_bd,$ngay_kt){
        $sql="insert into khuyen_mai(ma_km, phantram_km, trangThai, ngay_bd, ngay_kt) values ('$ma_km','$phantram_km','$trangThai','$ngay_bd','$ngay_kt')";
        pdo_execute($sql);
    }
    
?>